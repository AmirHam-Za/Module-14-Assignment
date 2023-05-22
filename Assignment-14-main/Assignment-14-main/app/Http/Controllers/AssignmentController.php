<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{

    
    // Question-1 method
    function UserInfo(Request $request):string{
        $name = $request->input('name');
        return $name;
    }
    // Question-2 method
    function UserAgent(Request $request):string{
        $userAgent = $request->header('User-Agent');
        return $userAgent;
    }

    // Question-3 method
    function ApiEndpoint(Request $request){
        $page = $request->query('page',null);
        if($page !== null){
            return $page;
        }else{
            return;
        }
    }
    // Question-4 method
    function JsonResponse():JsonResponse{
        $data = array(
            "message"=> "Success",
            "data"=>array(
                "name"=> "John Doe",
                "age"=> 25
            )
        );
        return response()->json($data);
    }
    // Question-5 method
    function FileUploads(Request $request):bool{
        $file=$request->file('avatar');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        return true;
    }
    // Question-6 method
    function SetCookie(Request $request){
        $rememberToken = $request->cookie('remember_token',null);
        return $rememberToken;
    }
}
