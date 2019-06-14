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

Route::get('images/{filename}', function ($filename)
{
    $path = storage_path() . '/storage/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});



/*
|--------------------------------------------------------------------------
| Routes Notifications
|--------------------------------------------------------------------------
|
*/


Route::get('/', function(){

    $notification=Auth::guard('admine')->check();
    $notification->notify(new \app\notifications\newnotification());
    
});









/*
|--------------------------------------------------------------------------
| Routes login
|--------------------------------------------------------------------------
|
*/



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('/admine')->group (function(){
       Route::get('/login','Auth\AdmineLoginController@showLoginForm')->name('admine.login');
       Route::post('/login','Auth\AdmineLoginController@login')->name('admine.login.submit');
       Route::get('/','AdmineController@index')->name('admine.Dashboard');


/*
|--------------------------------------------------------------------------
| forget and  reset
|--------------------------------------------------------------------------
|
*/

Route::post('/Password/email','Auth\AdmineForgotPasswordController@sendResetLinkEmail')->name('admine.password.email');
Route::get('/Password/reset','Auth\AdmineForgotPasswordController@showLinkRequestForm')->name('admine.password.request');
Route::post('/Password/reset','Auth\AdmineResetPasswordController@reset');
Route::get('/Password/reset/{token}','Auth\AdmineResetPasswordController@showResetForm')->name('admin.password.reset');

});


/*
|--------------------------------------------------------------------------
| logout
|--------------------------------------------------------------------------
|
*/

Route::get('/users/logout','Auth\LoginController@userlogout')->name('user.logout');
Route::get('/logout','Auth\AdmineLoginController@logout')->name('admine.logout');





/*
|--------------------------------------------------------------------------
| pages routes
|--------------------------------------------------------------------------
|
|
*/


Route::get('/Acceuil', function () {
    return view('Acceuil');
});

Route::get('Contact', function () {
    return view('Contact');
});

Route::get('Creation Evenment', function () {
    return view('Creation Evenment');
});

Route::get('editviw', function () {
    return view('editviw');
});

Route::get('info', function () {
    return view('info');
});

Route::get('Liste de salle', function () {
    return view('Liste de salle');
});

Route::get('Liste des evenments', function () {
    return view('Liste des evenments');
});

Route::get('inscrie', function () {
    return view('inscrie');
});


Route::post('/inscrie','InscreptionController@store');




/*
|--------------------------------------------------------------------------
| admin routes
|--------------------------------------------------------------------------
|
|
*/





Route::get('dashboard', function () {
    return view('dashboard');
});





Route::get('map', function () {
    return view('map');
});


Route::get('notifications', function () {
    return view('notifications');
});



Route::get('tables_info', function () {
    return view('tables_info');
});



Route::get('tables_salle', function () {
    return view('tables_salle');
});




Route::get('tables', function () {
    return view('tables');
});



Route::get('tables_contact', function () {
    return view('tables_contact');
});



Route::get('category', function () {
    return view('category');
});



Route::get('info_event', function () {
    return view('info_event');
});




Route::get('salle_event', function () {
    return view('salle_event');
});



Route::get('upgrade', function () {
    return view('upgrade');
});


Route::get('admine_login', function () {
    return view('auth\admine-login');
});




/*
|--------------------------------------------------------------------------
| admin category routes
|--------------------------------------------------------------------------
|
|
*/



Route::post('/category','CategoryController@store');
Route::get('/tables','CategoryController@index');
Route::get('/{id}/category','CategoryController@edit');
Route::put('/{id}/category','CategoryController@update');
Route::delete('/{id}/tables', 'CategoryController@destroy');



/*
|--------------------------------------------------------------------------
| admin info routes 
|--------------------------------------------------------------------------
|
|
*/


Route::post('/info_event','InfoController@store');
Route::get('/tables_info','InfoController@index');
Route::get('/{id}/info_event','InfoController@edit');
Route::put('/{id}/info_event','InfoController@update');
Route::delete('/{id}/tables_info', 'InfoController@destroy');





/*
|--------------------------------------------------------------------------
| admin salle routes 
|--------------------------------------------------------------------------
|
|
*/


Route::post('/salle_event','SalleController@store');
Route::get('/tables_salle','SalleController@index');
Route::get('/{id}/salle_event','SalleController@edit');
Route::put('/{id}/salle_event','SAlleController@update');
Route::delete('/{id}/tables_salle', 'SalleController@destroy');



/*
|--------------------------------------------------------------------------
| view category routes crud
|--------------------------------------------------------------------------
|
|
*/



Route::post('/Creation Evenment','CategoryController@storeviw');
Route::get('/Liste des evenments','CategoryController@indexviw');
Route::get('/{id}/Creation Evenment','CategoryController@editviw');
Route::put('/{id}/Creation Evenment','CategoryController@updateviw');




/*
|--------------------------------------------------------------------------
| view info routes crud
|--------------------------------------------------------------------------
|
|
*/



Route::get('/info','InfoController@indexviw');
Route::put('/{id}/info_event','InfoController@update');
Route::delete('/{id}/tables_info', 'InfoController@destroy');







/*
|--------------------------------------------------------------------------
| view salle routes crud
|--------------------------------------------------------------------------
|
|
*/


Route::get('/Liste de salle','SalleController@indexviw');
Route::get('/Acceuil','SalleController@indexacue');

Route::get('/dashboard','UserController@index');
Route::delete('/{id}/dashboard','UserController@destroy');




/*
|--------------------------------------------------------------------------
| view Contact routes crud
|--------------------------------------------------------------------------
|
|
*/

Route::post('/Contact','ContactController@store');
Route::delete('/{id}/', 'ContactController@destroy');
Route::get('/tables_contact','ContactController@index');
