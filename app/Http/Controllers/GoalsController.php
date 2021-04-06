<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Player;

class GoalsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function goal(Request $request, Goal $goal){

        $goal->player_id=$request->player_fname;
        $goal->magoli=$request->magoli;
        $goal->maoni=$request->maoni;
        $goal->tarehe_ya_magoli=$request->tarehe_ya_magoli;

        $goal->save();

        return back()->with('success', 'Magoli yamehifadhiwa Kikamilifu!');

    }
}