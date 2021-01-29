<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// namespace App\Http\Controllers\Auth;
// use App\Http\Controllers\AdminLoginController;

// use App\Http\Controllers\PagesController;

// use App\Http\Controllers\Controller;




Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     return view('users.profile');
// });

Route::get('/checking', function () {
    return view('users.posts');
});




Route::get('/testingRelations/{id}', function ($id) {
    // $user=\App\Category::find($id)->user;
    $cat=\App\User::find($id)->category;
    return $cat;
});


Route::get('/testingRelationss/{id}', function ($id) {
    $post =\App\Category::find($id)->posts;
    $cat =\App\Post::find($id)->category;
    return $cat;
});






//posts routes
Route::get('/posts', 'PostController@index')->middleware('auth:admin');
Route::get('/posts/{id}', 'PostController@indexPublic');
Route::delete('/posts/{id}', 'PostController@destroyPublic');
Route::get('posts/{id}/edit', 'PostController@editPublic');
Route::put('posts/{id}/update', 'PostController@updatePublic');
Route::post('/posts/create/{category}', 'PostController@storePublic');
Route::get('deletePost/{id}', 'PostController@destroy')->middleware('auth:admin');
//posts routes end



// Category routes 
Route::get('/category', 'CategoryController@index')->middleware('auth:admin');
Route::post('/category', 'CategoryController@store')->middleware('auth:admin');
Route::get('/delete/{id}', 'CategoryController@destroy')->middleware('auth:admin');
Route::get('/editCategory/{id}', 'CategoryController@edit')->middleware('auth:admin');
Route::post('updateCategory/{id}', 'CategoryController@update')->middleware('auth:admin');
Route::get('/homepage' , 'CategoryController@indexpublic')->name('index');
Route::get('/categories', 'CategoryController@showPublic')->name('allcategories');



// event route

// Route::get('/singlepage', function () {
//     return view('users.events');
// });

Route::get('/single','EventController@indexPublic')->name('allevents');

// Route::get('/event', function () {
//     return view('layout.event');
// });

// Route::get('/admin_main', function () {
//     return view('layout.admin_main');
// });

// Route::get('/edit', function () {
//     return view('layout.edit');
// });


Route::post("/Event","EventController@store")->middleware('auth:admin');
Route::get("/edit/{id}","EventController@edit")->middleware('auth:admin');
Route::post("/update/{id}","EventController@update")->middleware('auth:admin');
Route::get("/event","EventController@index")->middleware('auth:admin');
Route::delete("/delete/{id}","EventController@destroy")->middleware('auth:admin');
//end event routes







//admins routes

Route::post("/admin/store", "AdminController@store");
// Route::get("/admin", "AdminController@show")->name('admin.dashboard');
Route::post("/admin", "AdminController@show");
Route::delete("/admin/delete/{id}","AdminController@distroy");
Route::get("/admin/edit/{id}", "AdminController@edit");
Route::put("/admin/update/{id}", "AdminController@update");


//admin routes end



//users routes start

Route::get('/test/{id}','UserController@single')->name('singlepage');
// Route::put('user/update/{id}', 'UserController@update');
Route::post('updatePic/{id}', 'UserController@updatePic');



//users routes end




//comments routes start


Route::post('/comments/create/{id}','CommentController@store');
Route::delete('/comments/{id}','CommentController@destroy');

//comments routes end





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





// Route::post('/logintest', 'AdminController@show')->middleware('Check');


Route::prefix('admin')->group(function(){

Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get("/", "AdminController@show")->name('admin.dashboard');


});

