<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class works
 * @package App\Models
 * @version October 13, 2016, 11:07 am UTC
 */
class works extends Model
{
    use SoftDeletes;

    public $table = 'works';
    

    protected $dates = ['deleted_at','start','end'];


    public $fillable = [
        'order',
        'title',
        'company',
        'country',
        'start',
        'end',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order' => 'integer',
        'title' => 'string',
        'company' => 'string',
        'country' => 'string',
        'start' => 'date',
        'end' => 'date',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order' => 'required',
        'title' => 'required',
        'company' => 'required',
        'start' => 'required',
        'description' => 'required'
    ];

    
}
