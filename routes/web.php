<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShortController;

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

Route::get('/about', function () {
    return view('portfolio');
});
Route::get('/features', function () {
    return view('features');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/homepage', function () {
    return view('Homepage');
});



// Route::get('/register', function () {

//     return view('Homepage');
// });

// Route::get('/user_register', [App\Http\Controllers\UserController::class, 'register'])->name('Homepage');
Route::resource('users', UserController::class);
Route::post('user_register', [UserController::class, 'register']);
Route::post('user_login', [UserController::class,"doLogin"]);
Route::get('loginView', [UserController::class,"loginView"]);

Route::get('/logout', [UserController::class,"doLogout"]);
// Route::get('statistics/{short_urls_id}', [UserController::class,"statistics"]);
Route::get('statistics', [UserController::class,"statistics"]);
// Route::get('homepageView', [UserController::class,"homepageView"]);
Route::get('homepageView', function () {

    $users_id = session("users_id");
    // $urls = \AshAllenDesign\ShortURL\Models\ShortURL::latest()->get();
    $urls = \AshAllenDesign\ShortURL\Models\ShortURL::select('*')
            ->where('users_id','=',$users_id)
            ->get();
    $latest = \AshAllenDesign\ShortURL\Models\ShortURL::select('*')
            ->where('users_id','=',$users_id)
            ->latest()->first();

    return view('Homepage', compact('urls','latest'));
});

Route::post('/', function () {
    $builder = new \AshAllenDesign\ShortURL\Classes\Builder();

    $shortURLObject = $builder->destinationUrl(request()->url)->make();
    $shortURL = $shortURLObject->default_short_url;
    echo($shortURL);

    return back()->with('success','URL shortened successfully');

})->name('url.shorten');
// Route::post('/',[ShortController::class,"loginView"])->name('url.shorten');



// Route::resource('users_store', UserController::class);
