<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*Route::get('/', function() {
    return 'やちゅまむし';
});*/

Route::get('/', function(){
    $nokura = array(
      [
        'title' => 'abc<br>',
        'story' => 'モブキャラ4人のギャグコメディ'
      ],
      [
        'title' => 'イデアの眷属',
        'story' => 'スーツの人たちがたくさん出てくる'
      ],
    );
    $array = array();
    foreach($nokura as $item) {
        $title = $item['title'];
        $story = $item['story'];
        $arr = array(
          'title' => $title,
          'story' => $story
        );
        array_push($array, $arr);
    }
    return $array;
   });

Route::resource('/spot', "API\SpotController");