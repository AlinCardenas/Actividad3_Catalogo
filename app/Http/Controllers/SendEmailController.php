<?php

namespace App\Http\Controllers;

use App\Mail\FormularioMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function envio(Request $request)
    {

        $images = [];

        foreach ($request->file('images') as $imagen) {
            $nombre = uniqid('img_').'.'.$imagen->getClientOriginalExtension();
            $imagen->storeAs('public/imgs', $nombre);
            $images[] = $nombre;
        }
        
        $correo = new FormularioMailable(
            $request->name,
            $request->street,
            $request->code,
            $request->numext,
            $request->numint,
            $request->country,
            $request->description,
            $images,
        );
        Mail::to('al222111269@gmail.com')->send( $correo );

        dump("Enviado!!!");
    }
}
