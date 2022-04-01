<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function inicio()
    {
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.agify.io?name=miguel');
        $datos = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $personajes = [];

        foreach ($datos as $personaje) {
            $personajes[] = [
                'nombre' => $personaje['name'],
                'edad' => $personaje['age'],
                'contar' => $personaje['count'],
            ];
        }

        return view('Apivista',['personajes' => $personajes]);
    }
}
