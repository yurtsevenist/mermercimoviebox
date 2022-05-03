<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //loginPost
    public function loginPost(LoginPostRequest $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            toastr()->success(Auth::user()->name . ' Hoşgeldin');
            return redirect()->route('home');
        }
        else
        {
            toastr()->warning('Kullanıcı Bilgilerinizi Kontrol Ediniz');
            return redirect()->route('home');
        }
    }//end loginPost
    //logout
    public function logout()
    {
        toastr()->warning(Auth::user()->name  . ' Çıkış Yapıldı');
        Auth::logout();
        return redirect()->route('home');
    }
    //end logour


}
