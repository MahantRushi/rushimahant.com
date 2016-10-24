<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class testimonials
 * @package App\Models
 * @version October 24, 2016, 10:39 am UTC
 */
class testimonials extends Model
{
    use SoftDeletes;

    public $table = 'testimonials';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'order',
        'photo',
        'name',
        'position',
        'company',
        'testimonial'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order' => 'integer',
        'photo' => 'string',
        'name' => 'string',
        'position' => 'string',
        'company' => 'string',
        'testimonial' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order' => 'required',
        'photo' => 'required',
        'name' => 'required',
        'position' => 'required',
        'company' => 'required',
        'testimonial' => 'required'
    ];

    
}
