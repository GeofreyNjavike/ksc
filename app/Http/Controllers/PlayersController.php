<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Atendance;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

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

        // $userId=Auth::user()->id;
        // $user= Player::
        //  join('users', 'players.parent_id', '=', 'users.id')
        //  ->where('players.parent_id', $userId)
        //  ->first();

        $user = Player::where('player_fname', '=', $request->get('player_fname'))->first();
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


  public function malipo(Request $request, Player $player)
    {

       $userId=Auth::user()->id;
        $user= Player::
         join('users', 'players.parent_id', '=', 'users.id')
         ->where('players.parent_id', $userId)
         ->first();


if (!empty($user) ) {

        $data= array();
    $data['kumbukumbu']=$request->kumbukumbu;
    $data['usajili']=$request->usajili;
     $data['payment']='Payed';


    DB::table('players')->where('parent_id', $userId)->update($data);

    $data = array('name'=>"Ksc");

    Mail::send(['text'=>'malipo'], $data, function($message) {
        $message->to('graduatetz@gmail.com', 'Habari Boss')->subject('Malipo Yamefanyika');
        $message->from('graduatetz@kisotasc.com', 'Ksc');
    });



     return back()->with('success', 'Malipo Yamefanyika Kikamilifu!');
}
else{
    return back()->with('success', 'Hujasajili Mtoto Tafadhari wasiliana nasi!');

}

    }

public function paying(){

    $pay= Player::
             join('users', 'players.parent_id', '=', 'users.id')
             ->get();

  return  view('payed', compact('pay'));

}

public function mahudhurio(){


   $date= DB::table('atendances')->select('created_at')->get();

    $atend= Atendance::
             join('players', 'atendances.player_id', '=', 'players.player_id')->select('players.player_id','players.image','players.player_fname','players.player_lname','atendances.created_at','atendances.maendeleo')
             ->get();


  return  view('admin.mahudhurio', compact('atend','date'));




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



$dt= Carbon::now();



$age = DB::table('players')->where('player_id',$id)->first();

$age0 = $age->dob;





$dt3 =$dt->diffInYears($age0);


        $player = DB::table('players')->where('player_id',$id)->first();


        return  view('admin.edit', compact('player','dt3'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update1(Request $request)
    {
        $userId = Auth::user()->id;
        $data= array();
        $data['ushuhuda']=$request->ushuhuda;

        $image= $request->file('parent_image');

        if ($image) {

            unset($oldimage);

            $image_name= date('YmdHis').rand(1, 9999);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.'.$ext;
            $image->storeAs('public/parents', $image_full_name);

            $data['parent_image']=$image_full_name;
             DB::table('users')->where('id', $userId)->update($data);

            return back()->with('success', 'Testmony Added Succefully');
        }

    }
    public function update(Request $request, $id)
    {
        $oldimage = $request->old;

        $data= array();
        $data['height']=$request->height;
        $data['weight']=$request->weight;
        $data['position']=$request->position;
        $data['foot']=$request->foot;
        $data['jezi']=$request->jezi;
         $data['chenga']=$request->chenga;
          $data['nguvu']=$request->nguvu;
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

          * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {



        DB::table('players')->where('player_id',$id)->delete();

        return  redirect()->route('home')->with('success', 'Player Deleted');
    }

    public function destroyuser($id)
    {



        DB::table('users')->where('id',$id)->delete();

        return back()->with('success', 'User Deleted');
    }


public function send_aprove(Player $player, $id){
        $user= Player::
         join('users', 'players.parent_id', '=', 'users.id')
         ->first();




    $player= array();
    $player['progress']='Aproved';
       DB::table('players')->where('player_id', $id)->update($player);


        return redirect()->route('home')->with('success', 'Status Edited Succefully');


}
public function showMahudhurio($id){

    $userId=Auth::user()->id;

             $days_attended= Player::
             join('users', 'players.parent_id', '=', 'users.id')
             ->join('atendances', 'atendances.player_id', '=', 'players.player_id')
             ->where('players.player_id', '=', $id)
             ->where('players.parent_id', $userId)
             ->where('atendances.maendeleo', '=', 'yupo')
             ->count();

             return $days_attended;
}

}
