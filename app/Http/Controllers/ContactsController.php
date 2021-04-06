<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Info;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;
use Illuminate\Support\Facades\DB;
 use App\Player;

use App\Atendance;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player = DB::table('players')->where('progress','Aproved')->get();

        $info = DB::table('infos')->get();

        return view('welcome', compact('player','info'));
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
    public function store(Request $request, Contact $contact)
    {



        $contact->customer_name=$request->customer_name;
        $contact->customer_email=$request->customer_email;
        $contact->customer_subject=$request->customer_subject;
        $contact->customer_message=$request->customer_message;

        $contact->save();

        $data = array('name'=>"Ksc");

    Mail::send(['text'=>'for_contact_mail'], $data, function($message) {
        $message->to('geofreynjavike2017@gmail.com', 'Mzazi Mpendwa')->subject('Ujumbe kutoka kwa mdau');
        $message->from('geofreynjavike@gmail.com', 'Ksc');
    });



            return redirect()->route('/')->with('success', 'Mwanao Amesajiliwa Kikamilifu!');

    }



    public function  atendance(Request $request , Atendance $atendance)
    {

$data  =  $request->all();



    // foreach($data as $lv){

        // return $data;

        // $str = json_decode($data['player_id'], true);

        $atendance->player_id=$data['player_id'];
        $atendance->maendeleo =$data["maendeleo"];

        $atendance->save();


    // }

 return redirect()->route('home')->with('success', 'Umemaliza Kikamilifu!');


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
