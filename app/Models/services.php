<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class services
 * @package App\Models
 * @version October 12, 2016, 5:53 pm UTC
 */
class services extends Model
{
    use SoftDeletes;

    public $table = 'services';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'order',
        'logo',
        'title',
        'description',
        'link',
        'target'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order' => 'integer',
        'logo' => 'string',
        'title' => 'string',
        'description' => 'string',
        'link' => 'string',
        'target' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order' => 'required|integer',
        'logo' => 'required',
        'title' => 'required',
        'description' => 'required',
        'target' => 'required'
    ];

    
}
