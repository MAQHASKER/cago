<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function profile()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return view('pages.profile');
    }

    public function admin()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect()->route('home');
        }
        return view('pages.admin');
    }
}
