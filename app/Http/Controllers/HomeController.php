<?php

namespace App\Http\Controllers;
use App\Player;
use App\Contact;
use App\Goal;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;
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

             $userz= DB::table('users')->where('clearance_level','=',5)->get();


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

            return view('home', compact('user','count_players','count_payed','count_emails','userz'));

        }elseif (Auth::user()->clearance_level==5) {

            $user= Player::
             join('users', 'players.parent_id', '=', 'users.id')
             ->get();

             $maendeleo = Goal::
             join('players', 'players.player_id', '=', 'goals.player_id')
             ->get();

             $count_players= Player::
             join('users', 'players.parent_id', '=', 'users.id')
             ->count();

            return view('coach.home',compact('user','count_players'));
        } 
        
        
        else
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
    

    public function addUser(Request $request, User $user){

      
        $user->fname=$request->fname;
        $user->lname=$request->lname;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->clearance_level=$request->clearance_level;
        $user->password=Hash::make($request->password);
               
        $user->save();
                // 'password' => Hash::make($data['password']),

                return back();
            
    
    }

     public function destroy($id)
    {



        DB::table('users')->where('id',$id)->delete();

        return  back()->with('success', 'User Deleted successfully');
    }
}