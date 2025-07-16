<?php

namespace App\Http\Controllers;

use App\Mail\ContactoEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function enviarContacto(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'commerce_email' => 'required|email',  // Validar que commerce_email sea un email válido
        ]);

        // Crear el array de detalles
        $details = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Depuración para asegurarse de que los detalles están presentes
        if (!isset($details['name']) || !isset($details['phone']) || !isset($details['email']) || !isset($details['message'])) {
            throw new \Exception('Faltan datos necesarios para el correo');
        }
        // Enviar el correo electrónico
        Mail::to($request->commerce_email)->send(new ContactoEmail($details));

        return back()->with('success', 'Mensaje enviado con éxito!');
    }
}
