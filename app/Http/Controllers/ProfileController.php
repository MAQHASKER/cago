<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Отображение страницы профиля
     */
    public function index()
    {
        return view('pages.profile');
    }

    /**
     * Обновление данных профиля
     */
    public function update(Request $request)
    {
        try {
            $user = Auth::user();

            Log::info('Начало обновления профиля', [
                'user_id' => $user->id,
                'request_data' => $request->all()
            ]);

            // Определяем правила валидации в зависимости от измененного поля
            $rules = [];

            // Проверяем наличие полей в запросе
            if ($request->has('firstName')) {
                $rules['firstName'] = 'required|string|max:255';
            }
            if ($request->has('secondName')) {
                $rules['secondName'] = 'required|string|max:255';
            }
            if ($request->has('email')) {
                $rules['email'] = ['required', 'email', Rule::unique('users')->ignore($user->id)];
            }
            if ($request->has('login')) {
                $rules['login'] = ['required', Rule::unique('users')->ignore($user->id)];
            }
            if ($request->has('password')) {
                $rules['password'] = 'nullable|min:8';
            }

            // Если нет полей для обновления
            if (empty($rules)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Нет полей для обновления'
                ], 400);
            }

            // Валидация данных
            $validated = $request->validate($rules);

            Log::info('Данные валидированы успешно', ['validated_data' => $validated]);

            // Обновляем только измененные поля
            if (isset($validated['firstName'])) {
                $user->first_name = $validated['firstName'];
                $user->name = $validated['firstName'] . ' ' . $user->second_name;
            }
            if (isset($validated['secondName'])) {
                $user->second_name = $validated['secondName'];
                $user->name = $user->first_name . ' ' . $validated['secondName'];
            }
            if (isset($validated['email'])) {
                $user->email = $validated['email'];
            }
            if (isset($validated['login'])) {
                $user->login = $validated['login'];
            }
            if (isset($validated['password']) && !empty($validated['password'])) {
                $user->password = Hash::make($validated['password']);
            }

            $user->save();

            Log::info('Профиль успешно обновлен', ['user_id' => $user->id]);

            return response()->json([
                'success' => true,
                'message' => 'Профиль успешно обновлен'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Ошибка валидации', [
                'errors' => $e->errors(),
                'user_id' => Auth::id()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Ошибка валидации',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Ошибка при обновлении профиля', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'user_id' => Auth::id()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Ошибка при обновлении профиля: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Удаление профиля пользователя
     */
    public function destroy(Request $request)
    {
        try {
            $user = Auth::user();

            // Проверяем пароль
            if (!Hash::check($request->password, $user->password)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Неверный пароль'
                ], 422);
            }

            // Удаляем пользователя
            $user->delete();

            // Выходим из системы
            Auth::logout();

            Log::info('Профиль успешно удален', ['user_id' => $user->id]);

            return response()->json([
                'success' => true,
                'message' => 'Профиль успешно удален',
                'redirect' => route('login')
            ]);
        } catch (\Exception $e) {
            Log::error('Ошибка при удалении профиля', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'user_id' => Auth::id()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Ошибка при удалении профиля: ' . $e->getMessage()
            ], 500);
        }
    }
}
