<?php namespace Stone\Testimonials\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Testimonial Back-end Controller
 */
class Testimonial extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        $this->addJs('/plugins/stone/testimonials/assets/js/testimonial.js');
        $this->addCss('/plugins/stone/testimonials/assets/css/testimonial.css');

        BackendMenu::setContext('Stone.Testimonials', 'testimonials', 'testimonial');
    }

}