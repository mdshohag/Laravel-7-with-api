<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*

Route::get('/testing-the-api', function() {
    return [
        
        'message' => 'Hello',
        'body' => 'Welcome',
        'name' => 'Test'


];
    
    ;
});
*/

// post
// crud
// create
// get
// update
// delete

/*
Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@store');
Route::put('/posts', 'PostController@update');
Route::delete('/posts', 'PostController@destroy');
*/

Route::apiResource('posts', 'PostController');

/*
Route::get('/posts', function (){
   $post = Post::create([
        'title' => 'my first post', 
        'slug' => 'my-first-post'
        ]);

        return $post;
});

//create route
Route::post('/posts');

//update route
Route::put('/posts/{$id}');

// delete
Route::delete('/posts/{$id}');

*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
