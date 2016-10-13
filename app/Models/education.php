<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class education
 * @package App\Models
 * @version October 13, 2016, 4:48 pm UTC
 */
class education extends Model
{
    use SoftDeletes;

    public $table = 'education';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'order',
        'title',
        'institution',
        'description',
        'country',
        'end'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order' => 'integer',
        'title' => 'string',
        'institution'=>'string',
        'description' => 'string',
        'country' => 'string',
        'end' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order' => 'required',
        'title' => 'required',
        'institution'=>'required',
        'description' => 'required',
        'end' => 'required'
    ];

    
}
