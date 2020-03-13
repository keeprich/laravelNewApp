<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientsController extends Controller
{
    public function list() {

         // creating customers

    $clients = [
        'The foods we eat',
        'How to connect the world',
        'No one can take it all',
        'Will wait and see'
            ];
        
        // sending data to clients view
        
            return view('internals/clients', [
                'client' => $clients,
            ]);

    }
}
