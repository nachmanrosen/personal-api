<?php

use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('home2');
});
Route::get('/requests', 'InstitutionController@getRequests' )->middleware('cors');;
Route::get('/requests/{id}', 'InstitutionController@getRequestsId' )->middleware('cors');

Route::get('/institutions', 'InstitutionController@store' )->middleware('cors');;

Route::get('/institutions/{id}', 'InstitutionController@institutionId')->middleware('cors');

Route::get('/experience', 'ExperienceController@experience')->middleware('cors');

Route::get('/experience/{id}', 'ExperienceController@experienceId')->middleware('cors');

Route::get('/skills', 'CategorySkillController@skills')->middleware('cors');

Route::get('/skills/{id}', 'CategorySkillController@skillsId')->middleware('cors');

Route::get('/projects', 'ProjectsController@projects')->middleware('cors');

Route::get('/projects/{id}', 'ProjectsController@projectsId')->middleware('cors');

//Route::resource('/posts', 'Posts');

Route::post('/post', 'Posts@store')->middleware('cors');

Route::patch('/patch/{id}', 'Posts@patch')->middleware('cors');

Route::put('/put/{id}', 'Posts@update')->middleware('cors');

Route::delete('/delete/{id}', 'Posts@destroy')->middleware('cors');

Route::get('/posts', 'Posts@index')->middleware('cors');






Route::fallback(function(){
   return response()->json(['errors' => [ 
       'status'=> '404', 
       'source'=>[
           'pointer'=>'institutions'],
        'detail'=>'resource not found'
       ]], 404);

});
