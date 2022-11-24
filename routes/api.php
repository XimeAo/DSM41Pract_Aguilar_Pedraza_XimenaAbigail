<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StudentsController;
use App\Http\Controllers\API\SubjectsController;
use App\Http\Controllers\API\TeachersController;
use App\Http\Controllers\API\GroupsController;

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
Route::apiResource('studentsapi', StudentsController::class);
Route::apiResource('subjectsapi', SubjectsController::class);
Route::apiResource('teacherapi', TeachersController::class);
Route::apiResource('groupsapi', GroupsController::class);


/*Route::get('studentsG', [SubjectController::class,'index'])->name('subject');
Route::post('studentsP',[SubjectController::class,'index'])->name('subject');
Route::put('studentsPut', [SubjectController::class,'index'])->name('subject');
Route::delete('studentsD',[SubjectController::class,'index'])->name('subject');*/


/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
