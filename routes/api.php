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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('stage1', function () {
//     return datatables()
//     ->eloquent(App\formato1::query())
//     ->toJson();
// });

Route::apiResource('stage1', 'Api\formato1Controller');
Route::apiResource('stage2', 'Api\formato2Controller');
Route::apiResource('stage3', 'Api\formato3Controller');
Route::apiResource('stage4', 'Api\formato4Controller');
Route::apiResource('stage5', 'Api\formato5Controller');
Route::apiResource('stage6', 'Api\formato6Controller');

