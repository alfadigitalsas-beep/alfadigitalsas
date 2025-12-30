<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /* =========================
       PÁGINA DE INICIO
    ========================== */
    public function inicio()
    {
        return view('pages.inicio');
    }

    /* =========================
       NOSOTROS
    ========================== */
    public function nosotros()
    {
        return view('pages.nosotros');
    }

    /* =========================
       MISIÓN Y VISIÓN
    ========================== */
    public function misionVision()
    {
        return view('pages.mision-vision');
    }

    /* =========================
       SERVICIOS
    ========================== */
    public function servicios()
    {
        return view('pages.servicios');
    }

    /* =========================
       CONTACTO
    ========================== */
    public function contacto()
    {
        return view('pages.contacto');
    }

    /* =========================
       PROCESAR FORMULARIO CONTACTO
       (Listo para MySQL)
    ========================== */
    public function enviarContacto(Request $request)
    {
        $request->validate([
            'nombre'   => 'required|min:3',
            'email'    => 'required|email',
            'mensaje'  => 'required|min:10',
        ]);

        // Aquí luego guardamos en la BD
        // Contacto::create($request->all());

        return back()->with('success', 'Mensaje enviado correctamente 🚀');
    }
}
