<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'DashboardController@index');
Route::get('house', 'DashboardController@house');
Route::get('blog', 'DashboardController@blog');
Route::get('menu', 'DashboardController@menu');
Route::get('promo', 'DashboardController@promo');



Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/anyardaftarggn', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

/*Route::get('/home', ['middleware' => 'auth', function () {

    return view('home');

}]);*/






Route::get('/home', ['middleware' => 'auth', function() {

    $jumEvent = \DB::table('events')
                    ->count();

    $jumGallery = \DB::table('galleries')
                    ->count();

    $jumPromo = \DB::table('promos')
                    /*->where('status', 0)*/
                    ->count();

    $jumUser = \DB::table('users')
                    ->count();


    $jumDj = \DB::table('djs')->count();
    $djs = \DB::table('djs')->take(8)->get();
    
    return view('home', compact('jumEvent', 'jumGallery', 'jumPromo', 'jumUser', 'jumDj', 'djs'));

}]);


Route::post('covers/upload', function() {

	if(!empty($_FILES['file'])) {
            foreach($_FILES['file']['name'] as $key => $name) {
                if($_FILES['file']['error'][$key] == 0 && move_uploaded_file($_FILES['file']['tmp_name'][$key], "file_upload/video/covers/{$name}")) {
                    $uploaded[] = $name;
                }
            }

            if(!empty($_POST['ajax'])) {
                die(json_encode($uploaded));
            }
        }

});


//Route::post('events/upload', 'EventsController@upload');

Route::post('events/upload', function() {

	if(!empty($_FILES['file'])) {
            foreach($_FILES['file']['name'] as $key => $name) {
                $name = rand(11111,99999).'-'.$name;
                if($_FILES['file']['error'][$key] == 0 && move_uploaded_file($_FILES['file']['tmp_name'][$key], "file_upload/video/events/{$name}")) {
                    $uploaded[] = $name;
                }

            }

            if(!empty($_POST['ajax'])) {
                die(json_encode($uploaded));
            }
        }

});


Route::post('galleries/upload', function() {

    if(!empty($_FILES['file'])) {
            foreach($_FILES['file']['name'] as $key => $name) {
                $name = rand(11111,99999).'-'.$name;
                if($_FILES['file']['error'][$key] == 0 && move_uploaded_file($_FILES['file']['tmp_name'][$key], "file_upload/video/galleries/{$name}")) {
                    $uploaded[] = $name;
                }
            }

            if(!empty($_POST['ajax'])) {
                die(json_encode($uploaded));
            }
        }

});


Route::resource('covers', 'CoversController');

Route::resource('events', 'EventsController');
Route::get('events/{events}/reserves', 'EventsController@reserve');
Route::get('events/{events}/guests', 'EventsController@guest');

Route::resource('djs', 'DjsController');
Route::resource('abouts', 'AboutsController');
Route::resource('blogs', 'BlogsController');
Route::resource('categorymenus', 'CategoryMenusController');
Route::resource('menus', 'MenusController');
Route::resource('reserves', 'ReservesController');
Route::resource('guests', 'GuestsController');
Route::resource('users', 'UsersController');


Route::resource('galleries', 'GalleriesController');

Route::resource('promos', 'PromosController');
Route::get('promos/{promos}/reserves', 'PromosController@reserve');

Route::resource('reservepromos', 'ReservePromosController');
Route::resource('houses', 'HousesController');

Route::resource('subscribes', 'SubscribesController');




Route::get('siapapembuatnya', 'DashboardController@insta');
