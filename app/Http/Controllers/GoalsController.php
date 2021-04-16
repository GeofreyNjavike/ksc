<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Info;

use App\Player;

class GoalsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function goal(Request $request, Goal $goal){

        $goal->player_id=$request->player_fname;
        $goal->passing=$request->passing;
        $goal->dribbling=$request->dribbling;
        $goal->receiving=$request->receiving;
        $goal->turning=$request->turning;
        $goal->shooting=$request->shooting;
        $goal->running=$request->running;
        $goal->jaggling=$request->jaggling;
        $goal->magoli=$request->magoli;
        $goal->maoni=$request->maoni;
        $goal->url=$request->url;
        $goal->tarehe_ya_magoli=$request->tarehe_ya_magoli;

        $goal->save();

        return back()->with('success', 'Magoli yamehifadhiwa Kikamilifu!');

    }
    public function show($id)
    {
        $info = DB::table('infos')->get();

        $player_news = Goal::
        join('players', 'players.player_id', '=', 'goals.player_id')
        ->where('goals.player_id',$id)
        ->get();

        return  view('player', compact('player_news','info'));
        
     
    }

}