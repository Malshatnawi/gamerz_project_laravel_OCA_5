<?php

namespace App\Http\Controllers;

use App\Post;

use App\Category;

use App\Comment;

use App\User;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_posts = Post::all();

        return view ('admins.posts' , compact('all_posts'));


        
    }

    public function indexPublic($id){
        $all_posts = Post::where('category_id' , $id)->orderByDesc('id')->get();


        $all_comments = Comment::all();

        $category = Category::find($id)->id;

        // $all_posts= Category::find($id)->posts;
        // orderByDesc('id')->get();

        $user = User::all();

        return view ('users.newfeeds' , compact('all_posts' , 'user' , 'category' , 'all_comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPublic(Request $request)
    {
        $request->validate([
            'post_desc'   => 'required',
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePublic(Request $request , $category)

    {
            $this->createPublic($request);

            if ($request->hasFile('image')){

            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/', $filename);
            $user = auth()->user();

            Post::create([
                'post_desc'          => $request->post_desc,
                'post_image'         => $filename,
                'category_id'        => $category,
                'user_id'            => $user->id,
            ]);

            }
            
            else{

            $user = auth()->user();

            Post::create([
                'post_desc'          => $request->post_desc,
                'category_id'        => $category,
                'user_id'            => $user->id,
            ]);

                
            }

          
        return redirect ("/posts/$category");





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }
    

    public function editPublic(Post $post, $id)
    {
        $post_to_be_edited=Post::find($id);

    }
    
    public function updatePublic(Request $request, $id)
    {

        if ($request->hasFile('image')){

            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/', $filename);
            $user = auth()->user();

        post::where("id", $id)->update([
        "post_desc"    =>$request->post_desc,
        "post_image"   => $filename
    
        ]);


        return redirect()->back();

    }

    else{

        $user = auth()->user();

        post::where("id", $id)->update([
            "post_desc"    =>$request->post_desc,
        
            ]);

        return redirect()->back();

            
        }

}
        
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {
        $post_by_id=Post::destroy($id);
    
    
        return redirect ('posts');
    }



    public function destroyPublic(Post $post, $id)
    {
        $post_by_id=Post::destroy($id);
    
    
        return redirect()->back();
    }
}
