<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller{
    public function __invoke() {
        // dd(Auth::check());
        return view('home');
    }
}
