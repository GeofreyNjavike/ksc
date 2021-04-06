<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SquardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kipa = DB::table('players')->where('position','kipa')->get();
        $kiungo = DB::table('players')->where('position','kiungo')->get();
        $beki = DB::table('players')->where('position','beki')->get();
        $winga = DB::table('players')->where('position','winga')->get();
        $mshambuliaji = DB::table('players')->where('position','mshambuliaji')->get();

        $dt= Carbon::now();

$age = DB::table('players')->where('position','kipa')->first();

$age0 = $age->dob;

$dt3 =$dt->diffInYears($age0);


  return view('squard',compact('kipa','kiungo','beki','winga','age0','mshambuliaji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player, $id)
    {

//         $dateOfBirth = '1994-07-02';

// $years = Carbon::parse($dateOfBirth)->age;
// $myDate= $player['dob']->where('player_id',$id)->select('dob')->where('player_id',$id)->first();
// $years= Carbon::parse($myDate)->diff(Carbon::now())->format('%y years');

$dt= Carbon::now();



$age = DB::table('players')->where('player_id',$id)->first();

$age0 = $age->dob;





$dt3 =$dt->diffInYears($age0);


        $player = DB::table('players')->where('player_id',$id)->first();


        return  view('player_details', compact('player','dt3'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}