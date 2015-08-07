<?php namespace Stone\Testimonials\Models;

use Model;

/**
 * Testimonial Model
 */
class Testimonial extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stone_testimonials_testimonials';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name',
        'message',
        'is_allowed'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}