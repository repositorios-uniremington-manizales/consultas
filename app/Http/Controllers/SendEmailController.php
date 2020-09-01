<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//  Model
use App\Credentials;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendCredentialsForEmail;

class SendEmailController extends Controller
{
    public function sendCredentialsForEmail(Request $request){
        $identification = $request->identification;
        $credentials = Credentials::where('identification', $identification)->first();
        if($credentials === null){

            return response()->json('error');
        }else{

            try {
                //  Actualizar las veces que el usuario ha hecho el intento para reclamar las credenciales de usuario
                Credentials::where('identification', $identification)
                ->update([
                    'credentialClaimAttempts' => ($credentials->credentialClaimAttempts + 1)
                ]);

                //  Enviar mail con todos los datos de las credenciales
                Mail::to($credentials->institutionalMail)->send(new SendCredentialsForEmail($credentials));
                return response()->json($credentials->institutionalMail);
                
            } catch (\Throwable $th) {
                return response()->json('error');
            }
        }
    }
}