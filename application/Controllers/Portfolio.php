<?php

namespace App\Controllers;

use App\Libraries\Controller;

/**
 * Portfolio controller.
 *
 * @package App\Controllers
 */
class Portfolio extends Controller
{
    public function index()
    {
        $data = [
            'portfolios' => 
        ];
        
        echo view('templates/primary/header');
        echo view('portfolio');
        echo view('templates/primary/footer');
    }
}
