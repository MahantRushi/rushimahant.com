<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class socials
 * @package App\Models
 * @version October 12, 2016, 11:56 am UTC
 */
class socials extends Model
{
    use SoftDeletes;

    public $table = 'socials';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'icon',
        'link',
        'target'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'icon' => 'string',
        'link' => 'string',
        'target' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'icon' => 'required',
        'link' => 'required',
        'target' => 'required'
    ];

    
}
