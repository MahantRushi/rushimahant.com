<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class portfolio
 * @package App\Models
 * @version October 27, 2016, 9:30 am UTC
 */
class portfolio extends Model
{
    use SoftDeletes;

    public $table = 'portfolios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'order',
        'title',
        'punchline',
        'main_image',
        'icon',
        'about',
        'made_for',
        'description',
        'video_link',
        'lightbox_image',
        'soundcloud_link',
        'gallery',
        'external_link',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order' => 'integer',
        'title' => 'string',
        'punchline' => 'string',
        'main_image' => 'string',
        'icon' => 'string',
        'about' => 'string',
        'made_for' => 'string',
        'description' => 'string',
        'video_link' => 'string',
        'lightbox_image' => 'string',
        'soundcloud_link' => 'string',
        'gallery' => 'string',
        'external_link' => 'string',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order' => 'required',
        'title' => 'required',
        'main_image' => 'required',
        'icon' => 'required',
        'type' => 'required'
    ];

    
}
