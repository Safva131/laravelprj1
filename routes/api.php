<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('employeecategory',[TestController::class,'fnDisplayCategory']);
Route::post('addcategory',[TestController::class,'fnAddCategory']);
Route::get('getcustomerss',[TestController::class,'fnAPIGetCustomers']);
Route::post('updatecategory',[TestController::class,'fnUpdateCategories']);


Route::get('data',[TestController::class,'fngetData']);
Route::get('list',[TestController::class,'fnGetList']);