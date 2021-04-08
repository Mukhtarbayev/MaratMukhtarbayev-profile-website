<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\App;

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'{lang}'], function(){
    Route::get('/main', function() {
        return view('main');
    });
    
    Route::get('/about', function() {
        return view('about');
    });
        
    Route::get('/contact', function() {
        return view('contact');
    });
});

Route::get('/blog/create', function() {
    return view('blog/create');
});
// Route::get('/{lang}', function ($lang) {
//     App::setlocale($lang);
//     return view('main');
// });


Route::post('/blog/create',[ BlogController::class, 'store' ])->name('add-post');

Route::get('/blog/index',[ BlogController::class, 'index' ]);

Route::get('/post/{id}',[ BlogController::class, 'get_post' ]);