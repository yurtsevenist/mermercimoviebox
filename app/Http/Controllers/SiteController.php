<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //home page
    public function homePage()
    {
        return view('home');
    }//end home page
    //movie page
    public function moviePage()
    {
        return view('movies');
    }//end movie page
    public function mymoviePage()
    {
    return view('mymovies');
    }

}
