<?php

namespace App\Controllers\Admin;

use App\Libraries\Admin\Controller;

/**
 * Admin home controller.
 *
 * @package App\Controllers\Admin
 */
class Home extends Controller
{
    /**
     * Index.
     */
    public function index()
    {
        echo view('templates/primary/header');
        echo view('welcome_message');
        echo view('templates/primary/footer');
    }
}