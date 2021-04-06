<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class InfosController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function info(Request $request, Info $info){

        if ($request->faili->getClientOriginalName()) {
            $ext = $request->faili->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,9999).'.'.$ext;
            $request->faili->storeAs('public/infos',$file);
        }
        else
        {
            $file = '';

        }

        $info->taarifa=$request->taarifa;
        $info->faili=$file;

        $info->ujumbe=$request->ujumbe;

        $info->save();
        return redirect()->route('home');
    }
}