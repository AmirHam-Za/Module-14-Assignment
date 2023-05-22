<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

// Question-1 route
Route::post('/userinfo',[AssignmentController::class,'UserInfo']);

// Question-2 route
Route::post('/useragent',[AssignmentController::class,'UserAgent']);

// Question-3 route
Route::get('/query',[AssignmentController::class,'ApiEndpoint']);

// Question-4 route
Route::get('/jsonresponse',[AssignmentController::class,'JsonResponse']);

// Question-5 route
Route::post('/upload',[AssignmentController::class,'FileUploads']);

// Question-6 route
Route::post('/setcookie',[AssignmentController::class,'SetCookie']);

// Question-7 route
Route::post('/submit',function(Request $request){
    $email = $request->input('email');
    if($email){
        return array(
            "success"=> true,
            "message"=> "Form submitted successfully."
        );
    }else{
        return "Email must not be empty!";
    }
});



// Assignment complete(module-14)
