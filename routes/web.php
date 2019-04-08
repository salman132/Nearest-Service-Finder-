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
    return view('front');
})->name('front');

Auth::routes();

Route::get('/user/portal', 'HomeController@index')->name('home');

Route::get('select/district',[
    'uses'=>'FrontendController@create',
    'as'=> 'select.district'
]);
Route::get('house/find/{id}',[
    'uses'=> 'FrontendController@show',
    'as'=> 'house.find'
]);

Route::group(['middleware'=>'auth'],function (){

    Route::get('profile/complete',[
        'uses'=> 'ProfileController@index',
        'as'=> 'pro'
    ]);
    Route::post('profile/save',[
        'uses'=> 'ProfileController@store',
        'as'=> 'profile.complete'
    ]);
    Route::get('apartment/fill',[
        'uses'=> 'ApartmentsController@index',
        'as'=> 'apartment.fill'
    ]);
    Route::get('location',[
        'uses'=> 'ApartmentsController@create',
        'as'=>'location.find'
    ]);
    Route::post('apartment/store',[
        'uses'=> 'ApartmentsController@store',
        'as'=> 'apartment.store'
    ]);
});
