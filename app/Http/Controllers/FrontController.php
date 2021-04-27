<?php

namespace App\Http\Controllers;
use App\Player;
use App\Contact;
use App\Goal;
use App\User;
use App\About;
use App\Hero;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero = Hero::get();

        return view('admin.heros', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeHero(Request $request, Hero $hero)
    {
        
            $request->hero_image->getClientOriginalName();
            $ext = $request->hero_image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,9999).'.'.$ext;
            $request->hero_image->storeAs('public/heros',$file);


        $hero->hero_head=$request->hero_head;
        $hero->hero_image=$file;

        $hero->hero_content=$request->hero_content;

    $hero->save();

    return back()->with('success','Hero content has been saved successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, About $aboutus)
    {

    $aboutus->about_head=$request->about_head;
    $aboutus->about_content=$request->about_content;
    $aboutus->save();

    return back()->with('success','About us content has been saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $about = About::get();

        return view('admin.about', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $about = About::where('id',$id)->first();


        return  view('admin.edit_about', compact('about'));
    }

    public function editHero($id)
    {
        
        $hero = Hero::where('id',$id)->first();


        return  view('admin.edit_hero', compact('hero'));
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

        $heroes['hero_head']=$request->hero_head;
        $heroes['hero_content']=$request->hero_content;
      
        
        $image= $request->file('hero_image');

        if ($image) {

            unset($oldimage);

            $image_name= date('YmdHis').rand(1, 9999);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.'.$ext;
            $image->storeAs('public/heros', $image_full_name);

            $heroes['hero_image']=$image_full_name;
             DB::table('heroes')->where('id', $id)->update($heroes);
            return redirect()->route('home')->with('success', 'Heroes Updated Succefully');
    }
}

    public function updateAbout(Request $request, $id)
    {
        

        $abouts= array();

        $abouts['about_head']=$request->about_head;
        $abouts['about_content']=$request->about_content;


             DB::table('abouts')->where('id', $id)->update($abouts);

            return redirect()->route('home')->with('success', 'About Us Updated Succefully');
    
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
