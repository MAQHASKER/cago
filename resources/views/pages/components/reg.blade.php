@extends('app')

@section('content')
<section class="position-relative py-4 py-xl-5" style="min-height: 100vh;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Регистрация</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-5">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                            </svg>
                        </div>
                        <form class="text-center d-flex flex-column flex-grow-1" method="POST" action="{{ route('register') }}" style="width: 250px;">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" placeholder="Имя" value="{{ old('first_name') }}">
                                @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input class="form-control @error('second_name') is-invalid @enderror" type="text" name="second_name" placeholder="Фамилия" value="{{ old('second_name') }}">
                                @error('second_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Электронная почта" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input class="form-control @error('login') is-invalid @enderror" type="text" name="login" placeholder="Логин" value="{{ old('login') }}">
                                @error('login')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Пароль">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Повтор пароля">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-block w-100" type="submit">Зарегистрироваться</button>
                            </div>
                            <p class="text-muted">Есть аккаунт? <a href="{{ route('login') }}">Войди</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
