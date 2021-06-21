<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function update(Request $request, Video $video){

if($request->first_video==null and $request->second_video==null){

    return back()->with('message', 'CAN NOT ADD EMPTY URLS');

    }
    elseif($request->first_video==!null and $request->second_video==null){
        Video::create([
            'first_video'=>$request->first_video,
        ]);
 return back()->with('success','First video Url has been added Successfully!');
    }
    elseif($request->first_video==null and $request->second_video==!null){
        Video::create([
            'second_video'=>$request->second_video,
        ]);
 return back()->with('success','Second video Url has been added Successfully!');
    }
    elseif($request->first_video==!null and $request->second_video==!null){
        Video::create([
            'first_video'=>$request->first_video,
            'second_video'=>$request->second_video,
        ]);
 return back()->with('success','Video Urls has been added Successfully!');
    }
    else{
        return back();
    }
}
}
