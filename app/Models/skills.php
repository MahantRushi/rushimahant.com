<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class skills
 * @package App\Models
 * @version October 24, 2016, 10:22 am UTC
 */
class skills extends Model
{
    use SoftDeletes;

    public $table = 'skills';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'order',
        'type',
        'title',
        'icon',
        'level'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order' => 'integer',
        'type' => 'string',
        'title' => 'string',
        'icon' => 'string',
        'level' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order' => 'required',
        'type' => 'required',
        'title' => 'required',
        'icon' => 'required',
        'level' => 'required|integer|between:1,100'
    ];

    
}
