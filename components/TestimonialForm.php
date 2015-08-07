<?php namespace Stone\Testimonials\Components;

use Cms\Classes\ComponentBase;
use Stone\Testimonials\Models\Testimonial;


class TestimonialForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'TestimonialForm',
            'description' => 'This adds the testimonial form to a page'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * Saves form post values from Testimonial Form to Database
     *
     * @param name ,message
     */
    public function onTestimonialSubmit() {

        $name = post('name');
        $message = post('message');

        $testimonial = new Testimonial();
        $testimonial->name = $name;
        $testimonial->message = $message;
        $testimonial->save();
    }
}