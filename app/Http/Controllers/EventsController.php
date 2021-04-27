<?php

// use App\Contact;
use Illuminate\Http\Request;
// use PhpParser\Node\Expr\AssignOp\Concat;
// use Illuminate\Support\Facades\DB;
//  use App\Player;

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


  public function event(Request $request,Event $event)
    {
        if ($request->image->getClientOriginalName()) {
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,9999).'.'.$ext;
            $request->image->storeAs('public/events',$file);
        }
        else
        {
            $file = '';

        }

        $event->tukio=$request->tukio;
        $event->mahali=$request->mahali;
        $event->image=$file;
        $event->muongozaji=$request->muongozaji;
        $event->tarehe=$request->tarehe;

        $event->save();
        return redirect()->route('home');
    }

    public function show(){

        $events = Event::select('*')->orderBy('created_at')->get();

        return view('admin.events',compact('events'));
    }
}