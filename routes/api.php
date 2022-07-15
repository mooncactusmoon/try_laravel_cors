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


//  Route::middleware('cors')->group(function () { 
//     Route::get('/demo-url',  function  (Request $request)  {
//         return response()->json(['Laravel CORS Demo']);
//      }); 
// });
Route::get('/demo-url',  function  (Request $request)  {
    return response()->json(['Laravel CORS Demo']);
 });
