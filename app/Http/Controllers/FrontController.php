<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Pcategory, Portfolio, Contact};
use Mail;

class FrontController extends Controller
{
    public function home()
    {


        return view ('front.home');
    }

    public function Portfolio($slug)
    {
        $slug = Pcategory::where('name',$slug)->firstOrFail();
        $portfolio = Portfolio::where('pcategory_id', $slug->id)->orderBy('id','desc')->limit(12)->get();

        return view ('front.portfolio',compact('portfolio','slug'));
    }


    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message1' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('imalsha@abhayawelfare.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
