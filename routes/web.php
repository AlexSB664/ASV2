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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::post('/ge/unlock/{ge}', 'GiftExchangeController@unlock')->name('ge.unlock');
Route::get('/ge/empty/{ge}', 'GiftExchangeController@empty')->name('ge.empty');

Route::resource('ge', 'GiftExchangeController',[
    'except' => ['edit','update']
]);
Route::get('/friend/create/{ge}','FriendController@create')->name('friend.create');
Route::post('/friend','FriendController@store')->name('friend.store');

// Route::resource('friends', 'FriendController',[
//     'only'=>['show','delete','edit','update','store']
// ]);

// Route::get('/index', 'GiftExchangeController@index')->name('ge.index');
// Route::get('/create', 'GiftExchangeController@create')->name('ge.create');
// Route::post('/create', 'GiftExchangeController@store')->name('ge.store');
// Route::get('/show/{giftexchange}', 'GiftExchangeController@show')->name('ge.show');
//Route::get('/show2', 'GiftExchangeController@decrytpField')->name('ge.show2');
Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');
//Route::resource('giftExchange', 'GiftExchangeController');