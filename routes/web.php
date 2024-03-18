<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/index', function () {
//     return view('index');
// })->middleware('check.user');

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/introduce', function () {
//     return view('introduce');
// });
// Route::get('/chair', function () {
//     return view('chair');
// });
// Route::get('/table', function () {
//     return view('table');
// });


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                                                                                                                                                         //
//////////////////////EXE 1 TUAN 2///////////////////////////////////////////////////////////////
// Route::get('/{name?}', function ($name = 'welcome') {
//     return view($name);
// }) -> whereAlpha ('name');
                                                                                                                                                                         //
                                                                                                                                                                         //
//////////////////////EXE 2 TUAN 2///////////////////////////////////////////////////////////////

// Route::group(['prefix' => 'thong'], function () {
//     Route::get('/{name?}', function ($name = 'welcome') {
//         return view($name);
//     })->whereAlpha('name');
// });
//                                                                                                                                                                          //
                                                                                                                                                                         //
                                                                                                                                                                         //
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Route::group(['prefix' => 'thong'], function () {
//     Route::get('/admin/{age}', function ($age) {
//         return view('home');
//     })->whereNumber('age');
// })->middleware('check.user');

///////////////////////////////////////////////TUAN 3: MIDDLEWARE////////////////////////////////////////////////////////////


////////////co tham so
// Route::get('/abc/{name}', function ($name) {
//     return 'Xin chao ' .$name;
// });
///////////////////////tham so ko bat buoc


// Route::get('/abc/{name?}', function ($name='admin') {
//     return 'Xin chao ' .$name;
// }) -> where ('name','[a-zA-Z]+');


// ////////////////////////////////2 tham so
// Route::get('/abc/{id?}/{name?}', function ($id='1', $name='admin') {
//     return 'Xin chao ' .$name;
// }) -> where (['id' => '[0-9]+', 'name' => '[a-zA-Z]+']);

Route::get('/admin/{age}', function () {
    return view('home');
})->middleware('checkuser');


Route::put('/', function () {
    return view('home');
})->name('home')->middleware('checkadmin');


Route::get('/welcome', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/login', function () {
    return view('login');
})->name('login');


////////////////////////TUAN 4///////////////////////////
// Route::get('/signup', function () {
//     return view('form_signup');
// });



// Route::get('/signup', function () {
//     return view('form_signup');
// });

// Route::post('/info_regis', function (Request $request) {
//     return view('info_regis',['data'=>$request]);
// })->name('info_regis');

//////////////////////DUNG CONTROLLER////////////////////////////////////////////////
Route::get('/{page?}', [WelcomeController::class,'page'])->name('page');
Route::post('/{info_regis?}', [WelcomeController::class,'info_regis'])->name('info_regis');