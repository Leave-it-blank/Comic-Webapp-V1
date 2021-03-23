<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller\Admin;
use App\Http\Controllers\Controller\Reader;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('edit-records','UserUpdateController@index');

Route::get('edit/{id}','UserUpdateController@show');

Route::post('edit/{id}','UserUpdateController@edit');

//delete data
Route::get('delete-records','UserDeleteController@index');
Route::get('delete/{id}','UserDeleteController@destroy');

 */

Route::namespace ('Reader')->name('project.manga.details')->group(function () {

    Route::get('/manga/{manga}/id/{id}', 'ViewComicController@manga_show');

});



Route::namespace ('Reader')->name('project.manga.chapter')->group(function () {

    Route::get('manga/{manga}/{id}/chapter/{chapter}', 'ChapterController@manga_chapter');
});

Route::namespace ('Reader')->name('reader.')->group(function () {

    Route::resource('/', 'HomepageController')->except([
        'create', 'store', 'update', 'destroy', 'edit',
    ]);

    Route::resource('/latest', 'LatestController')->except([
        'create', 'store', 'update', 'destroy', 'edit',
    ]);
     Route::resource('/comics', 'BrowseController')->except([
   'create', 'store', 'update', 'destroy', 'edit',
    ]);
    

    
});
Route::get('/search/', 'Reader\HomepageController@search')->name('reader.comic.search');
Route::get('/mostviewed/', 'Reader\HomepageController@mostviewed')->name('reader.comic.mostviewed');
Route::get('/mostpopular/', 'Reader\HomepageController@mostpopular')->name('reader.comic.mostpopular');
Route::get('/random/', 'Reader\HomepageController@mostrandom')->name('reader.comic.random');



Auth::routes();

Route::group(['middleware' => ['permission:create series|admin']], function () {

    Route::get('createseries', 'CreateseriesController@index');

});

Route::group(['middleware' => ['permission:admin']], function () {

    Route::get('settings', 'SettingsController@index');

});

Route::group(['middleware' => ['permission:admin']], function () {

    Route::namespace ('Admin')->prefix('admin')->name('admin.')->group(function () {

        Route::get('features', 'FeaturesController@index')->name('features.');
        Route::resource('/features/carousel', 'CarouselController');
        Route::resource('/users', 'UsersController');
      
    });
    Route::get('/users/search', 'Admin\UsersController@search')->name('admin.user.search');

});

Route::group(['middleware' => ['permission:edit series|admin|create series|delete series']], function () {

    Route::namespace ('Admin')->prefix('admin')->name('admin.')->group(function () {
 
        Route::resource('/comics', 'ComicsController');

        Route::resource('/comics/{id}/chapter', 'ChapterController');

    });

});

Route::group(['middleware' => ['permission:admin|reader|create series|delete series|edit series']], function () {

    Route::get('series', 'SeriesController@index');

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('profile', 'UserProfileController@index');

});
