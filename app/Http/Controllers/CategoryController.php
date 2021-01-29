<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        
        $categories = Category::all();
        return view('admins.Category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $request->validate([
            'cat_name'   => 'required',
            'cat_desc'   => 'required',
            'cat_image'  => 'mimes:jpeg,jpg,png|max:10000'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->create($request);
        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/cat_images', $filename);
        } else{
            $filename = 'image.png';
        }

        Category::create([
            'cat_desc'          => $request-> cat_desc,
            'cat_name'          => $request-> cat_name,
            'cat_image'         => $filename
        ]);
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function showPublic(Category $category)
{
    $categories = Category::all();
    $all_posts = Post::all();
    return  view('users.categories' , compact('categories' , 'all_posts'));
}



public function indexpublic()
{
    $categories = Category::all();
//        return view('users.index', compact('categories'));
    $all_posts = Post::all();
    $cat1 = Category::find('1');
    $post1 = Post::find('1');
    $postt = Post::orderBy('id','desc')->take(3)->get();

    return view ('users.index' , compact('all_posts','categories' , 'cat1','post1' , 'postt'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admins.edit_Category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
// 
    public function update(Request $request, $id)
    {
        $this->create($request);
        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/cat_images', $filename);
        } else{
            $filename = Category::find($id)->cat_image;
        }

        Category::where('id',$id)->update([
            'cat_name'  => $request->cat_name,
            'cat_desc'  => $request->cat_desc,
            'cat_image' => $filename
        ]);
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/category');
    }
}
