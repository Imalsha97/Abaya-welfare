<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Pcategory, Portfolio, Contact};

class FrontController extends Controller
{
    public function home()
    {


        return view ('front.home');
    }

    public function Portfolio($slug)
    {
        $slug = Pcategory::where('name',$slug)->firstOrFail();
        $portfolio = Portfolio::where('pcategory_id', $slug->id)->orderBy('id','desc')->limit(6)->get();

        return view ('front.portfolio',compact('portfolio','slug'));
    }
}
