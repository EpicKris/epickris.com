<?php

namespace App\Controllers;

use App\Libraries\Controller;

/**
 * Home controller.
 *
 * @package App\Controllers
 */
class Home extends Controller
{
    /**
     * Index.
     */
	public function index()
	{
        echo view('templates/hero/header');
        echo view('welcome_message');
        echo view('templates/hero/footer');
	}
}
