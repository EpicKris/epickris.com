<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Pages configuration.
 *
 * @package Config
 */
class Pages extends BaseConfig
{
    public $about = [
        'title'    => 'About',
        'keywords' => [
            'about',
            'hire',
            'current projects'
        ]
    ];

    public $cv = [
        'title' => 'CV',
        'keywords' => [
            'cv',
            'curriculum vitae',
            'resume',
            'about',
            'skills',
            'technology stack',
            'personal qualities',
            'certifications',
            'experience'
        ]
    ];

    public $portfolio = [
        'title' => 'Portfolio',
        'keywords' => [
            'portfolio'
        ]
    ];
}