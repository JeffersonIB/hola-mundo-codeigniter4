<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Página de bienvenida original de CodeIgniter ( / )
    public function index(): string
    {
        return view('welcome_message');
    }

    // Hola Mundo ( /home ) usando el motor de plantillas View Renderer
    public function home(): string
    {
        $data = [
            'titulo'      => 'Hola Mundo con CodeIgniter 4',
            'mensaje'     => '¡Hola Mundo!',
            'autor'       => 'Jefferson Ibañez',
            'version'     => \CodeIgniter\CodeIgniter::CI_VERSION,
            'fecha'       => date('d/m/Y H:i:s'),
            'tecnologias' => ['PHP', 'CodeIgniter 4', 'Composer', 'Apache', 'Lubuntu'],
        ];

        // Servicio "View Renderer" de CodeIgniter 4
        $renderer = service('renderer');

        return $renderer->setData($data)->render('home');
    }
}
