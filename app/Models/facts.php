<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class facts
 * @package App\Models
 * @version October 13, 2016, 10:13 am UTC
 */
class facts extends Model
{
    use SoftDeletes;

    public $table = 'facts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'order',
        'icon',
        'caption'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order' => 'integer',
        'icon' => 'string',
        'caption' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order' => 'required',
        'icon' => 'required',
        'caption' => 'required'
    ];

    
}
