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
    Route::get('edit/profile',[
        'uses'=> 'ProfileController@edit',
        'as'=> 'profile.edit'
    ]);
    Route::post('profile/update/{id}',[
        'uses'=> 'ProfileController@update',
        'as'=> 'profile.update'
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
    Route::get('/send/request/{id}',[
        'uses'=>'OrderController@order',
        'as'=> 'send.request'
    ]);
    Route::get('remove/request/{id}',[
        'uses'=> 'OrderController@remove',
        'as'=> 'remove.request'
    ]);
    Route::get('/order/page',[
        'uses'=> 'OrderController@create',
        'as'=> 'order.page'
    ]);
    Route::get('/order/remove/{id}',[
        'uses'=>'OrderController@destroy',
        'as'=> 'order.remove'
    ]);
    Route::get('/order/accept/{id}',[
        'uses'=> 'OrderController@accept',
        'as'=> 'order.accept'
    ]);
    Route::get('/user/order/page',[
        'uses'=> 'OrderController@view',
        'as'=> 'user.order'
    ]);
    Route::get('/apartment/remove/{id}',[
        'uses'=> 'ApartmentsController@destroy',
        'as'=> 'apartment.remove'
    ]);
});

Route::group(['middleware'=>'auth','prefix'=>'web_admin'],function (){

    Route::get('dashboard',[
        'uses'=> 'AdminController@index',
        'as'=> 'admin'
    ]);
    Route::get('add/city',[
        'uses'=> 'AdminController@create',
        'as'=> 'add.district'
    ]);
    Route::post('city/store',[
        'uses'=> 'AdminController@district',
        'as'=> 'city.store'
    ]);
    Route::get('add/thana',[
        'uses'=> 'AdminController@thana',
        'as'=> 'add.thana'
    ]);
    Route::post('thana/store',[
        'uses'=> 'AdminController@tstore',
        'as'=> 'thana.store'
    ]);

});
