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
     return view('index');
 })->name('index');


Route::get('/academic', function () {
    return view('academic');
});

Route::get('/GT', function () {
    return view('GT');
})->name('GT');

Route::get('/BandDescription', function () {
    return view('BandDescription');
})->name('bandDesc');

Route::get('/listening', function () {
    return view('listening');
})->name('listening');


Route::get('/reading', function () {
    return view('reading');
})->name('reading');


Route::get('/testbook', function () {
     return view('testbook');
 })->name('testbook');



Route::get('/viewtask', 'ViewController@index');
Route::get('/writingT1', 'ViewController@getTasks')->name('writingT1');
Route::get('/writingT2', 'ViewController@getWTE')->name('writingT2');
Route::get('/writingT1GT', 'ViewController@getWTL')->name('writingT1GT');
Route::get('/speaking', 'ViewController@getSpeak')->name('speaking');

Route::get('/writing', 'WritingQuestionController@display')->name('writing');
Route::get('/AllWquestions', 'WritingQuestionController@index');
Route::get('/result', 'ShowResult@index');
Route::post('/contact', 'ContactController@store');
Route::get('/doubts/pricing', 'DoubtController@store');
Route::get('/Evocab', 'VocabController@index');
Route::get('/Uname/{id}', 'SaveResultController@store');
//Route::resource('contact','ContactController');
Route::get('/doubts', 'DoubtController@index')->name('doubts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
