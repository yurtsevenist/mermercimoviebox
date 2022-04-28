<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;
class UserController extends Controller
{
    //loginPost
    public function loginPost(LoginPostRequest $request)
    {
        dd($request);
    }//end loginPost

    
}
