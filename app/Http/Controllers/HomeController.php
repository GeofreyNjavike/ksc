<?php

namespace App\Http\Controllers;
use App\Player;
use App\Contact;

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

             $count_players= Player::
             join('users', 'players.parent_id', '=', 'users.id')
             ->count();

             $count_payed= Player::
             join('users', 'players.parent_id', '=', 'users.id')
             ->where('payment','Payed')
             ->count();

             $count_emails= Contact::
             select('id')
             ->count();

            return view('home', compact('user','count_players','count_payed','count_emails'));

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
    public function parent(){

        $userId=Auth::user()->id;
        $parent= Player::
         join('users', 'players.parent_id', '=', 'users.id')
         ->where('players.parent_id', $userId)
         ->get();

        return view('parent_home',compact('parent'));

    }
}