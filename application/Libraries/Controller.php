<?php

namespace App\Libraries;

use App\Config\ViewData;
use CodeIgniter\View\View;
use Config\Services;

/**
 * Controller.
 *
 * @package App\Libraries
 */
class Controller extends \CodeIgniter\Controller
{
    /**
     * @var string[] Helpers.
     */
    protected $helpers = ['url'];

    /**
     * @var View Renderer.
     */
    protected $renderer;

    /**
     * Controller constructor.
     *
     * @param mixed ...$params Parameters.
     */
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        //$this->migrationRunner = Services::migrations();
        $this->renderer = Services::renderer();

        //$this->migrationRunner->latest();

        $viewDataConfig = new ViewData();

        $data = [
            'defaultKeywords' => $viewDataConfig->keywords,
            'goSquared'       => $viewDataConfig->goSquared,
            'hotjar'          => $viewDataConfig->hotjar
        ];
        $this->renderer->setData($data, 'raw');
    }
}
