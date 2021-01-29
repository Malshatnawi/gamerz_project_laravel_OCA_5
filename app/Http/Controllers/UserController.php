<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
use App\Post;


class UserController extends Controller
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
    public function store(Request $request)
    {
        //
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
    
        if ($request->hasFile('image')){

            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/', $filename);
            
        }
      
        user::where("id", $id)->update([
          "image"       =>$filename,
        ]);
        return redirect()->back();
    }


    public function updatePic(Request $request, $id)
    {
    
        if ($request->hasFile('image')){

            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/', $filename);
            
        }
      
        user::where("id", $id)->update([
          "image"       =>$filename,
        ]);
        return redirect()->back();
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

    public function single($id){
        // dd($id);
        // $post=User::find($id);
        $all_comments=Comment::all();
        $all_users=User::all();
        $user_posts=User::find($id)->posts->first();
        // $user_comment=Post::find($id)->comments;
        $user=User::find($id);
        // dd($user_comment);
        // dd($user);
        // dd($user_posts);
        return view('users.profile', [
            'post' => $user_posts,
            'user' => $user,
            'comment'=>$all_comments,
            'all_users'=>$all_users,
        ]);
    }


}
