<?php

namespace App\Http\Controllers;
use App\Player;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->clearance_level==10){




             $user= Player::
             join('users', 'players.parent_id', '=', 'users.id')
             ->get();

            return view('home', compact('user'));

        }else
        {
            $userId=Auth::user()->id;
            $parent= Player::
             join('users', 'players.parent_id', '=', 'users.id')
             ->where('players.parent_id', $userId)
             ->get();

            return view('parent_home',compact('parent'));
        }




    }
}