<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();
Route::get('/search', 'SearchController@index');
Route::get('/home', 'HomeController@index');
Route::get('/','GuestController@homepage');
Route::get('/homepage','GuestController@homepage');
Route::get('/visi_misi_taspen','GuestController@visimisi');
Route::get('/strukturorganisai','GuestController@strukturorganisai');
Route::get('/informasi_pensiunan','GuestController@informasi_pensiunan');
Route::get('/hubkami','GuestController@hubkami');
Route::get('/informasi_mutasi','GuestController@informasimutasi');
Route::get('/kelola_data_pensiunan','GuestController@kelola_data_pensiunan');

Route::get('/pencarian_pensiunan', function(){
  return view('pencarian_pensiunan');
});
Route::get('/informasi_pensiunan', function(){
  return view('informasi_pensiunan');
});

Route::get('/info', function(){
  return view('info');
});


Route::group(['prefix'=>'admin','middleware'=>['auth', 'role:admin']], function(){
  Route::resource('komentar','KomentarController');
  Route::resource('members', 'MembersController');
  Route::resource('pensiunans', 'PensiunansController');
  Route::resource('mutasis', 'MutasiController');
  });

Route::group(['prefix'=>'member','middleware'=>['auth', 'role:member']], function(){
  Route::resource('identitas_pribadi', 'Identitas_pribadiController');
  Route::resource('pengajuan_mutasis', 'Pengajuan_mutasiController');
  });

Route::get('mutasis/{mutasi}/export', [
    'middleware' => ['auth', 'role:member'],
    'as'   => 'export.mutasis.post',
    'uses' => 'MutasiController@getpdf'
  ]);

// Route::get('getPdf', 'MutasiController@getpdf');



Route::get('mutasis/{mutasi}/verif', [
'middleware' => ['auth', 'role:admin'],
'as' => 'admins.mutasi.borrowed',
'uses' => 'MutasiController@borrowed'
]);

Route::get('mutasis/{mutasi}/notverif', [
'middleware' => ['auth', 'role:admin'],
'as' => 'admins.mutasi.returned',
'uses' => 'MutasiController@returned'
]);



