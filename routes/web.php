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
 
/*starting page*/
Route::get('/', function () {
    return view('traveller');
});

Auth::routes();

Route::get('/user/activation/{token}','Auth\RegisterController@userActivation');
/*home post page*/
/*Route::get('/home', 'HomeController@index');*/
Route::get('/home', ['as' => 'home','uses' => 'HomeController@index']);

Route::post('/upload_post','HomeController@travel_upload_post');

/*indivisual main post-view */
Route::get('/view/{id?}', ['as' => 'view','uses' => 'HomeController@post']);
/*delete view*/
Route::get('/delete/{id?}', ['as' => 'view','uses' => 'HomeController@destroy']);
/*delete view*/
Route::get('/edit/{id?}', ['as' => 'edit','uses' => 'HomeController@edit']);
Route::post('/update/{id?}', ['as' => 'update','uses' => 'HomeController@update']);
/*like a post*/
Route::post('/like', ['as' => 'like','uses' => 'HomeController@like']);


/*view for profile*/
Route::get('/profile', ['as' => 'profile','uses' => 'ProfileController@index']);
Route::post('/profile','ProfileController@update_avatar');
Route::post('/update_status','ProfileController@update_status');


Route::get('/extra-shot', ['as' => 'home','uses' => 'ExtrashotController@index']);
Route::get('/extra/{id?}', ['as' => 'view','uses' => 'ExtrashotController@post']);
Route::post('/travel_post','ExtrashotController@travel_publish_post');

/*extra view*/
Route::get('/security', function () {
    return view('/system/security');
});

Route::get('/privacy', function () {
    return view('/system/privacy');
});

Route::get('/distance', function () {
    return view('/system/dis-search');
});

Route::get('/contents', function () {
    return view('/system/contents');
});

Route::get('/pages', function () {
    return view('/system/pages');
});

Route::get('/videos', function () {
    return view('/system/videos');
});

Route::get('/help', function () {
    return view('/system/help');
});

Route::get('/create-post', function () {
    return view('/form');
});

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');



Route::get('/place-details/{id?}', ['as' => 'place-details','uses' => 'PlacedetailController@index']);
Route::get('/place-details/place/{id?}', ['as' => 'place','uses' => 'PlaceController@index']);

/*Route::get('/place', function () {
    return view('/place-prticular');
});*/

Route::get('/top', function () {
    return view('/top-10');
});


//info routes
Route::get('/sikkim', function () {
    return view('/maps/sikkim');
});

Route::get('/odisha', function () {
    return view('/maps/odisha');
});

Route::get('/jk', function () {
    return view('/maps/jk');
});

Route::get('/Rajasthan', function () {
    return view('/maps/Rajasthan');
});

Route::get('/Himachal', function () {
    return view('/maps/Himachal');
});

Route::get('/Bangal', function () {
    return view('/maps/Bangal');
});

Route::get('/Uttrakhand', function () {
    return view('/maps/Uttrakhand');
});

Route::get('/assam', function () {
    return view('/maps/assam');
});

Route::get('/arunachal', function () {
    return view('/maps/arunachal');
});

Route::get('/manipur', function () {
    return view('/maps/manipur');
});

Route::get('/maharastra', function () {
    return view('/maps/maharastra');
});

Route::get('/jharkhand', function () {
    return view('/maps/jharkhand');
});

Route::get('/punjab', function () {
    return view('/maps/punjab');
});

Route::get('/andhrapradesh', function () {
    return view('/maps/andhrapradesh');
});

Route::get('/andaman', function () {
    return view('/maps/andaman');
});

Route::get('/chhatisgarh', function () {
    return view('/maps/chhatisgarh');
});

Route::get('/tamilnadu', function () {
    return view('/maps/tamilnadu');
});

Route::get('/gujarat', function () {
    return view('/maps/gujarat');
});

Route::get('/daman-&-due', function () {
    return view('/maps/daman-due');
});

Route::get('/madhya', function () {
    return view('/maps/madhya');
});

Route::get('/goa', function () {
    return view('/maps/goa');
});
Route::get('/nagaland', function () {
    return view('/maps/nagaland');
});
Route::get('/uttarpradesh', function () {
    return view('/maps/uttarpradesh');
});
Route::get('/delhi', function () {
    return view('/maps/delhi');
});
Route::get('/karnataka', function () {
    return view('/maps/karnataka');
});
Route::get('/kerala', function () {
    return view('/maps/kerala');
});
Route::get('/mizoram', function () {
    return view('/maps/mizoram');
});
Route::get('/meghalaya', function () {
    return view('/maps/meghalaya');
});
Route::get('/haryana', function () {
    return view('/maps/haryana');
});

Route::get('/bihar', function () {
    return view('/maps/bihar');
});

Route::get('/tripura', function () {
    return view('/maps/tripura');
});

Route::get('/telengana', function () {
    return view('/maps/telengana');
});

Route::get('/india', function () {
    return view('/system/india');
});

Route::get('/india-rail', function () {
    return view('/system/india-rail');
});

Route::get('/india-air', function () {
    return view('/system/india-air');
});

