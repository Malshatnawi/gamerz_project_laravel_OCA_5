<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show event data

        $show=Event::all();
        
        return view('admins.event', compact('show'));
    }


    public function indexPublic()
    {
        //show eventgallery

        $showall=Event::all();
        
        return view('users.events', compact('showall'));
        
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
        //validate
$request->validate([
    'name'=>'required',
  
    'place'=>'required',
    'date'=>'required',
    'description'=>'required',
    'image'=>'mimes:jpeg,jpg,png,gif|required|max:10000'


]);



if($request->hasFile('image')){
    $file=$request ->file('image');
    $ext=$file->getClientOriginalExtension();
    $filename="cover_Image" . '_'. time(). '.' .$ext;
    $file->move('images',$filename);
}

Event::create([
    'event_name'=>$request->name,
    'event_place'=>$request->place,

    'event_desc'=>$request->description,
    'event_date'=>$request->date,
    "event_image"=>$filename

]);

return redirect('/event')->with(['status' => ' Create successfully.']);

    }
        
       
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $show= Event::find($id);
       return view('users.single',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $showall=Event::where('id',$id)->get()->first();
        return view('admins.edit_event',compact('showall'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)


    {
        //



        $request->validate([
            'name'=>'required',
          
            'place'=>'required',
            'date'=>'required',
            'description'=>'required',
            'image'=>'mimes:jpeg,jpg,png,gif|required|max:10000'
        
        
        ]);
        
        
        
        if($request->hasFile('image')){
            $file=$request ->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename="cover_Image" . '_'. time(). '.' .$ext;
            $file->move('images',$filename);
        }

        Event::where('id',$id)->update([
            'event_name'=>$request->name,
    'event_place'=>$request->place,

    'event_desc'=>$request->description,
    'event_date'=>$request->date,
    "event_image"=>$filename

        ]);





        
       
        return redirect('/event')->with(['status' => ' updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {

        $del=Event::where('id',$id)->delete();
           
        return redirect('/event');
    }
}
