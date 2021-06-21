<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Info;
use App\Event;
use App\About;
use App\Hero;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;
use Illuminate\Support\Facades\DB;
 use App\Player;

use App\Atendance;
use App\Video;
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
        $first_video = DB::table('videos')->whereNotNull('first_video')->latest('created_at')->limit(1)->get();
        $second_video = DB::table('videos')->whereNotNull('second_video')->latest('created_at')->limit(1)->get();

        $users = DB::table('users')->where('ushuhuda','!=','null')->get();
        // get the current time
$current = Carbon::now();

// add 30 days to the current time
$infoExpires = $current->addDays();

        $player = DB::table('players')->where('progress','Aproved')->get();

        $info = DB::table('infos')->where('created_at','<',$infoExpires )->get();

        $events = DB::table('events')->get();

        $players = DB::table('players')->count();

        $mails = DB::table('contacts')->count();

        $hero = Hero::get();
        $about= About::get();


        return view('welcome', compact('player','info','events','players','mails','users','about','hero','first_video','second_video'));






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

    public function  mahudhurio(Request $request )
    {

        foreach($request->player_id as $key=>$player_id){
            $data = new Atendance();
            $data-> player_id= $player_id;
            $data-> maendeleo = $request->maendeleo[$key];
            $data->save();
        }
 return redirect()->route('home')->with('success', 'Umemaliza Kikamilifu!');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $email = Contact::get();

        return view('admin.jumbe', compact('email'));
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
        DB::table('contacts')->where('id',$id)->delete();

        return  back()->with('success', 'Ujumbe  Umefutwa');
    }
}
