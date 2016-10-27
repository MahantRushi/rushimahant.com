<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class blog
 * @package App\Models
 * @version October 24, 2016, 12:34 pm UTC
 */
class blog extends Model
{
    use SoftDeletes;

    public $table = 'blogs';
    

    protected $dates = ['deleted_at','published_at'];


    public $fillable = [
        'title',
        'category',
        'main_image',
        'post',
        'tags',
        'published_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'category' => 'string',
        'main_image' => 'string',
        'post' => 'string',
        'tags' => 'string',
        'published_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'category' => 'required',
        'main_image' => 'required',
        'post' => 'required',
        'tags' => 'required',
        'published_at' => 'required'
    ];

    
}
