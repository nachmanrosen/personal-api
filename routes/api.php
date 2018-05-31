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

Route::get('/institutions', 'InstitutionController@institution');

Route::get('/institutions/{id}', 'InstitutionController@institutionId');

Route::get('/experience', 'ExperienceController@experience');

Route::get('/experience/{id}', 'ExperienceController@experienceId');

Route::get('/skills', 'CategorySkillController@skills');

Route::get('/skills/{id}', 'CategorySkillController@skillsId');

Route::fallback(function(){
   // return 'Sorry. This resource does not exist.';
   return response()->json(['message' => 'Not Found!'], 404);

});
