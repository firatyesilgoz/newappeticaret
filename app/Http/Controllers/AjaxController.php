<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailables\Content;
use App\Http\Requests\ContentFormRequest;

class AjaxController extends Controller
{
    public function iletisimkaydet(ContentFormRequest $request){
        // $data = $request->all();

        // $data['ip'] =request()->ip();


        $newdata=[
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'ip'=>request()->ip(),
        ];
        $sonkaydedilen =Contact::create($newdata);

        return back()->withSuccess('Başarıyla Gönderildi');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('anasayfa');
    }
}
