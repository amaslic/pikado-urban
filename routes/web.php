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
//Route::get('/addpoints/{id}/{p1_id}/{p2_id}/{points1}/{points2}', 'MatchController@addPoints')->name('addpoints');
Route::post('/addmatch', 'MatchController@addMatch')->name('addmatch');
Route::get('/getmatches', 'MatchController@getMatches')->name('getmatches');
Route::get('/publicmatches', 'MatchController@getMatchesPublic')->name('publicmatches');
//Route::post('/addpoints', ['as' => 'addPoints', 'uses' => 'MatchController@addPoints'])->name('addpoints');
Route::post('/addpoints', 'MatchController@addPoints')->name('addpoints');

/*
Route::get('/addpoints', function() {
    return Input::all();
    $match = Match::find(Input::get('m_id'));
    $match->player1_points = $t;
    $match->player2_points = $t1;
    $match->save();

    $player = Player::find($t2);
    $player->points = $t3;
    $player->save();

    $player = Player::find($t4);
    $player->points = $t5;
    $player->save();

    session()->flash('msg', '<div class="alert alert-success"> Meč uspjesno azuriran! </div>');

    return back();
})->name('addpoints');*/