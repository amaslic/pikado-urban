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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/newmatch', 'MatchController@getPlayers')->name('newmatch');
Route::get('/table', 'TableController@getPlayers')->name('table');
Route::post('/addnews', 'NewsController@index')->name('addnews');
Route::get('/news', 'NewsController@index')->name('news');
Route::post('/addplayer', 'PlayerController@addPlayer')->name('addplayer');
Route::post('/addpoints', 'MatchController@addPoints')->name('addpoints');
Route::post('/addmatch', 'MatchController@addMatch')->name('addmatch');
Route::get('/getmatches', 'MatchController@getMatches')->name('getmatches');
Route::get('/publicmatches', 'MatchController@getMatchesPublic')->name('publicmatches');