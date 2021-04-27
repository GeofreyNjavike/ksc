<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Atendance;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Goal;


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

        $userId=Auth::user()->id;

        $days_attended= Player::
        join('users', 'players.parent_id', '=', 'users.id')
        ->join('atendances', 'atendances.player_id', '=', 'players.player_id')
        ->where('players.player_id', '=', $id)
        ->where('players.parent_id', $userId)
        ->where('atendances.maendeleo', '=', 'yupo')
        ->count();

        return  view('player', compact('player_news','info','days_attended'));
        
     
    }
    public function downloadInvoice($id){
        
        $user= Player::
        join('users', 'players.parent_id', '=', 'users.id')
        ->where('players.player_id', '=',$id)
        ->get();

        $userId=Auth::user()->id;

        $days_attended= Player::
        join('users', 'players.parent_id', '=', 'users.id')
        ->join('atendances', 'atendances.player_id', '=', 'players.player_id')
        ->where('players.player_id', '=', $id)
        ->where('players.parent_id', $userId)
        ->where('atendances.maendeleo', '=', 'yupo')
        ->count();

$pdf=PDF::loadview('admin.invoice', compact('user','days_attended'))->setOptions(['defaultFont' => 'sans-serif']);
return $pdf->download('invoice.pdf');
    }

}