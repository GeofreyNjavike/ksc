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

use App\Info;
class InfosController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function info(Request $request, Info $info){

            $request->faili->getClientOriginalName();
            $ext = $request->faili->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,9999).'.'.$ext;
            $request->faili->storeAs('public/infos',$file);


        $info->taarifa=$request->taarifa;
        $info->faili=$file;

        $info->ujumbe=$request->ujumbe;

        $info->save();
        return redirect()->route('home');
    }

    public function show(Request $request){

        $info= DB::table('infos')->get();

        return view('admin.info',compact('info'));
    }
}
