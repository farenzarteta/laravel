<?php

namespace FAREN\Http\Controllers;

use Illuminate\Http\Request;
use FAREN\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id; //ngambil session id saat ini
        $user = User::find($user_id); //ngambil user dgn id = id session saat ini
        return view('home')->with('posts', $user->posts); //ke home.blade.php sambil kasi parameter tabel post dgn parameter user
    }
}
