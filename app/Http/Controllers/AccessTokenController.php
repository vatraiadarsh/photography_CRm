<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class AccessTokenController extends Controller
{
    public function index(){
        return view('accesstoken.index');
    }

    public function makeRequest(Request $request){
            $email=$request->input('email');
            $url=url('sample');
            $token='bcjhbjbjdbvby3247319hfkjdsb';

            Mail::Send('emails.tokenrequest',[
                'email'=>$email,
                'url'  =>$url,
                'token'=>$token
            ], function($m) use ($email){               
                $m->to($email);
                $m->subject('Access Token Request');
                $m->cc('vatraiadarsh@gmail.com');
            });
            return redirect('sample');              
    }
}
