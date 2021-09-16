<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', function () {
    return view('main');
});

Route::get('/main', function () {
    return view('main');
});



Route::get('/post-a-job', function () {
    return view('post-a-project');
});


Route::get('browse-jobs','App\Http\Controllers\PagesController@getDanhsachbrowsejobs');

Route::get('search','App\Http\Controllers\PagesController@searchbrowsejobs');
Route::get('searchprice','App\Http\Controllers\PagesController@searchprice');




// Route::get('chi-tiet-freelancer/{id}/{ten}',['as'=>'detail','uses'=>'App\Http\Controllers\PagesController@chitiet']);


Route::get('chi-tiet-freelancer/{id}/{browse-jobs-details}',['as'=>'detail','uses'=>'App\Http\Controllers\PagesController@chitiet']);

Route::get('browse-jobs-details','App\Http\Controllers\PagesController@chitietdetail');




// Route::get('login', function () {
//     return view('login');
// });

// Route::get('register','App\Http\Controllers\PagesController@getRegester');
// Route::post('register','App\Http\Controllers\PagesController@postRegester');

// Route::get('login','App\Http\Controllers\PagesController@getdangnhap')->name('login');
// Route::post('login','App\Http\Controllers\PagesController@postdangnhap');
// Route::get('logout','App\Http\Controllers\PagesController@logout');



Route::get('themuserfreelancer','App\Http\Controllers\PagesController@getThemuserfreelancer');
Route::post('themuserfreelancer','App\Http\Controllers\PagesController@postThemuserfreelancer');

Route::get('themcontactapply','App\Http\Controllers\PagesController@getthemcontactuplly');
Route::post('themcontactapply','App\Http\Controllers\PagesController@postthemcontactuplly');




Route::group(['prefix'=>'admin','middleware'=>'Adminlogin'],function(){

        
        Route::get('login', function () {
            return view('admin.login');
        });
        Route::get('register',function(){
            return view('admin.register');
        });


        Route::get('danhsachdata','App\Http\Controllers\PagesController@getDanhsachdata');
        Route::get('themdata','App\Http\Controllers\PagesController@getThemdata');
        Route::post('themdata','App\Http\Controllers\PagesController@postThemdata');
        Route::get('suadata/{id}','App\Http\Controllers\PagesController@getSuadata');
        Route::post('suadata/{id}','App\Http\Controllers\PagesController@postSuadata');
        Route::get('xoadata/{id}','App\Http\Controllers\PagesController@getXoadata');


        Route::get('danhsachuser','App\Http\Controllers\PagesController@getDanhsachuser');
        Route::get('themuser','App\Http\Controllers\PagesController@getThemuser');
        Route::post('themuser','App\Http\Controllers\PagesController@postThemuser');
        Route::get('suauser/{id}','App\Http\Controllers\PagesController@getSuauser');
        Route::post('suauser/{id}','App\Http\Controllers\PagesController@postSuauser');
        Route::get('xoauser/{id}','App\Http\Controllers\PagesController@getXoauser');



        Route::get('danhsachcontact','App\Http\Controllers\PagesController@getDanhsachcontact');
        Route::get('themcontact','App\Http\Controllers\PagesController@getThemcontact');
        Route::post('themcontact','App\Http\Controllers\PagesController@postThemcontact');
        Route::get('suacontact/{id}','App\Http\Controllers\PagesController@getSuacontact');
        Route::post('suacontact/{id}','App\Http\Controllers\PagesController@postSuacontact');
        Route::get('xoacontact/{id}','App\Http\Controllers\PagesController@getXoacontact');

        // Auth
        Route::get('danhsachauth','App\Http\Controllers\PagesController@getDanhsachauth');
        Route::get('themauth','App\Http\Controllers\PagesController@getThemauth');
        Route::post('themauth','App\Http\Controllers\PagesController@postThemauth');
        Route::get('suaauth/{id}','App\Http\Controllers\PagesController@getSuaauth');
        Route::post('suaauth/{id}','App\Http\Controllers\PagesController@postSuaauth');
        Route::get('xoaauth/{id}','App\Http\Controllers\PagesController@getXoaauth');
   
});

Route::group(['prefix'=>'adminb'],function(){
    Route::get('danhsachdata','App\Http\Controllers\Pages2Controller@getDanhsachdata');
    
    Route::get('danhsachuser','App\Http\Controllers\Pages2Controller@getDanhsachuser');

    Route::get('danhsachcontact','App\Http\Controllers\Pages2Controller@getDanhsachcontact');
});

Route::get('contactn', function () {
    return view('admin.contact.contact');
});



Route::get('admin/dangnhap','App\Http\Controllers\PagesController@getdangnhapadmin')->name('dangnhap');
Route::post('admin/dangnhap','App\Http\Controllers\PagesController@postdangnhapadmin')->name('dangnhap');
Route::get('admin/logout','App\Http\Controllers\PagesController@logout');





Route::get('export', [App\Http\Controllers\MyController::class, 'export'])->name('export');
Route::post('import', [App\Http\Controllers\MyController::class, 'import'])->name('import');


