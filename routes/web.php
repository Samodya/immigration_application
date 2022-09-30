<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/print', function () {
    return view('Application4viewmore');
});



Route::get('/Application','App\Http\Controllers\PageController@application');
Route::get('/Application2','App\Http\Controllers\PageController@application2');
Route::get('/updateRec/{id}','App\Http\Controllers\PageController@updateRec');
Route::get('/moreinfo/{id}','App\Http\Controllers\ApplicationController@moreinfo');
Route::get('/updatesurname/{id}','App\Http\Controllers\ApplicationController@issurnameyes');
Route::get('/updatesurnameno/{id}','App\Http\Controllers\ApplicationController@issurnameno');
Route::get('/updatejob/{id}','App\Http\Controllers\ApplicationController@isjobyes');
Route::get('/updatejobno/{id}','App\Http\Controllers\ApplicationController@isjobno');
Route::get('/updateident/{id}','App\Http\Controllers\ApplicationController@isidentyes');
Route::get('/updateidentno/{id}','App\Http\Controllers\ApplicationController@isidentno');
Route::get('/updateextendvalidation/{id}','App\Http\Controllers\ApplicationController@isvalid_extenyes');
Route::get('/updateextendvalidationNo/{id}','App\Http\Controllers\ApplicationController@isvalid_extenno');
Route::get('/updatejourney/{id}','App\Http\Controllers\ApplicationController@isjourneyyes');
Route::get('/updatejourneyno/{id}','App\Http\Controllers\ApplicationController@isjourneyno');
Route::get('/updateammedments/{id}','App\Http\Controllers\ApplicationController@isammendmentsyes');
Route::get('/updatesmmendmentsno/{id}','App\Http\Controllers\ApplicationController@isammendmentsno');
Route::get('/delRec/{id}','App\Http\Controllers\ApplicationController@deleteRec');

//Route::get('/updatemore/{id}','App\Http\Controllers\ApplicationController@updatemore');
Route::get('/printinfo/{id}','App\Http\Controllers\PageController@printinfo');

//Post methods
Route::post('/addApplicants','App\Http\Controllers\ApplicationController@addAappli');
Route::post('/addApplicants2','App\Http\Controllers\ApplicationController@addAappli2');
Route::post('/updateFull','App\Http\Controllers\ApplicationController@updtRecord');
