<?php namespace Shohabbos\Catalog\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Brands extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_brands' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Shohabbos.Catalog', 'catalog', 'catalog-brands');
    }
}
