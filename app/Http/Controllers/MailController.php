<?php

namespace App\Http\Controllers;

use App\Models\Correos;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use Mail;

class MailController extends Controller
{
    public function getMail(Request $datos){
        $correos = new correos();
        $correos->Mensaje = $datos->message;
        $correos->id_usuario = auth()->user()->id;
        $correos->save();

        $Nombre = auth()->user()->name;
        $Correo = auth()->user()->email;
        $Mensaje = $datos -> message;
        $data = ['name' => $Nombre, 'email' => $Correo, 'sms' => $Mensaje];
        Mail::to('raziel.rosfo.1904@gmail.com')->send(new TestMail($data));
        return redirect('contacto');
    }
}
