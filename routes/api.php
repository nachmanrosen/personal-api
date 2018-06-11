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
Route::get('/requests', 'InstitutionController@getRequests' );
Route::get('/requests/{id}', 'InstitutionController@getRequestsId' );

Route::get('/institutions', 'InstitutionController@store' );

Route::get('/institutions/{id}', 'InstitutionController@institutionId');

Route::get('/experience', 'ExperienceController@experience');

Route::get('/experience/{id}', 'ExperienceController@experienceId');

Route::get('/skills', 'CategorySkillController@skills');

Route::get('/skills/{id}', 'CategorySkillController@skillsId');

Route::get('/projects', 'ProjectsController@projects');

Route::get('/projects/{id}', 'ProjectsController@projectsId');

//Route::resource('/posts', 'Posts');

Route::post('/post', 'Posts@store');

Route::patch('/patch/{id}', 'Posts@update');

Route::put('/put/{id}', 'Posts@update');

Route::delete('/delete/{id}', 'Posts@destroy');






Route::fallback(function(){
   return response()->json(['errors' => [ 
       'status'=> '404', 
       'source'=>[
           'pointer'=>'institutions'],
        'detail'=>'resource not found'
       ]], 404);

});
