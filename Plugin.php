<?php namespace Stone\Testimonials;

use Symfony\Component\Console\Helper\Helper;
use System\Classes\PluginBase;
use Backend;

/**
 * Testimonials Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails() {
        return [
          'name' => 'Testimonials',
          'description' => 'This lets anonymous users submit testmonials',
          'author' => 'Stone',
          'icon' => 'icon-comment'
        ];
    }

    public function registerComponents() {
        return [
          'Stone\Testimonials\Components\Posts' => 'posts',
          'Stone\Testimonials\Components\testimonialForm' => 'form'
        ];
    }

    /**
     * Register our Controller
     */
    public function registerNavigation() {
        return [
          'testimonials' => [
            'label' => 'Testimonials',
            'url' => Backend::url('stone/testimonials/testimonial'),
            'icon' => 'icon-comment',
            'permissions' => ['stone.*'],
            'order' => 100
          ]
        ];
    }

}
