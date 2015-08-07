<?php namespace Stone\Testimonials\Components;

use Cms\Classes\ComponentBase;
use Stone\Testimonials\Models\Testimonial;

class Posts extends ComponentBase {

    /**
     * Holds our testimonials
     * @var
     */
    public $testimonials;

    public function componentDetails() {
        return [
          'name'        => 'Testimonial Posts',
          'description' => 'For adding testimonials to a page.'
        ];
    }

    public function defineProperties() {
        return [];
    }

    public function onRun() {
        $this->testimonials = Testimonial::where('is_allowed','=', true)->get();
    }

}