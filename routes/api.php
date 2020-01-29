<?php

use App\Http\Controllers\StoryController;
use Illuminate\Http\Request;

/*
|-------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// })

Route::prefix('v2')->group(function(){
    Route::apiResource('/stories','api\v2\StoryController')->only(['show', 'store', 'update', 'destroy']);
    Route::apiResource('/people','api\v2\StoryController')->only('index');
});
