<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credentials;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendCredentialsForEmail;

class SendEmailController extends Controller
{
    public function sendCredentialsForEmail(Request $request){
        $identification = $request->identification;                
        $credentials = Credentials::where('identification', $identification)->first();
        
        Mail::to($credentials->institutionalMail)->send(new SendCredentialsForEmail($credentials));
        
        return response()->json('Mensaje Enviado');
    }
}