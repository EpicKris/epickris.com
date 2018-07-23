<?php

namespace App\Controllers;

use App\Libraries\Controller;
use CodeIgniter\PageNotFoundException;

/**
 * Pages controller.
 *
 * @package App\Controllers
 */
class Pages extends Controller
{
    /**
     * View.
     *
     * @param string $page Page.
     */
    public function view(string $page = 'home')
    {
        $this->cachePage(MINUTE);

        if (!file_exists(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $pagesConfig = new \Config\Pages();

        $data = [];

        if (isset($pagesConfig->$page)) {
            $this->renderer->setData($pagesConfig->$page, 'raw');
        }

        return view('templates/primary/header') . view('pages/' . $page)
               . view('templates/primary/footer');
    }
}
