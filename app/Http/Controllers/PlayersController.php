<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Player $player)
    {

        $userId=Auth::user()->id;
        $user= Player::
         join('users', 'players.parent_id', '=', 'users.id')
         ->where('players.parent_id', $userId)
         ->first();

        // $user = Player::where('fname', '=', Request::get('fname'))->first();
        // $user = DB::table('players')->where('fname', $request->fname)->first();

if ($user === null) {


    $player->player_fname=$request->player_fname;
    $player->player_lname=$request->player_lname;

    $player->dob=$request->dob;
    $player->weight=$request->weight;
    $player->height=$request->height;
    $player->medical_issue=$request->medical_issue;
    $player->disabled=$request->disabled;
    $player->school=$request->school;
    $player->parent_id=Auth::user()->id;
    $player->class=$request->class;

    $player->save();

     return redirect()->route('home')->with('success', 'Mwanao Amesajiliwa Kikamilifu!');
}
else{
    return redirect()->route('home')->with('success', 'Mwanao Alishafanyiwa Usajili!');

}

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player, $id)
    {

//         $dateOfBirth = '1994-07-02';

// $years = Carbon::parse($dateOfBirth)->age;
// $myDate= $player['dob']->where('player_id',$id)->select('dob')->where('player_id',$id)->first();
// $years= Carbon::parse($myDate)->diff(Carbon::now())->format('%y years');

$dob = Carbon::parse($player['dos']);

$years= $dob->age;

        $player = DB::table('players')->where('player_id',$id)->first();


        return  view('admin.edit', compact('player','years'));

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
        $oldimage = $request->old;

        $data= array();
        $data['height']=$request->height;
        $data['weight']=$request->weight;
        $data['position']=$request->position;
        $data['foot']=$request->foot;
        $data['jezi']=$request->jezi;
        $image= $request->file('image');

        if ($image) {
            unset($oldimage);
            $image_name= date('YmdHis').rand(1, 9999);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.'.$ext;
            $image->storeAs('public/players', $image_full_name);

            $data['image']=$image_full_name;
             DB::table('players')->where('player_id', $id)->update($data);
            return redirect()->route('home')->with('success', 'Player Updated Succefully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {



        DB::table('players')->where('player_id',$id)->delete();

        return  redirect()->route('home')->with('success', 'Player Deleted');
    }
}