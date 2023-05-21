<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    function return_input_name(Request $request)
    {
        $name = $request->input("name");
        return $name;
    }
    // 
    function return_user_agent(Request $request)
    {
        $user_agent = $request->header("User-Agent");
        return $user_agent;
    }
    // 
    function ReturnPage(Request $request)
    {
        $page = null;
        if (!empty($request->page)) {
            $page = $request->page;
        }
        return $page;
    }
    // 
    function ReturnJson()
    {
        return Response()->json([
            "message" => "Success",
            "data" => [
                "name" => "John Doe",
                "age" => 25
            ],
        ]);
    }
    // 
    function UploadImage(Request $request)
    {
        $image = $request->file("avatar");
        $originalFileName = $image->getClientOriginalName();
        $image->move("uploads", $originalFileName);
    }
    // 
    function return_cookie(Request $request)
    {
        $rememberToken = null;
        if (!empty($request->cookie("remember_token"))) {
            $rememberToken = $request->cookie("remember_token");
        }
        return $rememberToken;
    }
    // 
}
