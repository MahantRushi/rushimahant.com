<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class profile
 * @package App\Models
 * @version October 24, 2016, 11:56 am UTC
 */
class profile extends Model
{
    use SoftDeletes;

    public $table = 'profiles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'hobbies',
        'image',
        'location',
        'mobile',
        'email',
        'about',
        'freelance'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'hobbies' => 'string',
        'image' => 'string',
        'location' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'freelance' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'hobbies' => 'required',
        'image' => 'required',
        'location' => 'required',
        'mobile' => 'required',
        'email' => 'required',
        'freelance' => 'required'
    ];

    
}
