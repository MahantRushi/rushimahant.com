<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clients
 * @package App\Models
 * @version October 12, 2016, 7:08 pm UTC
 */
class clients extends Model
{
    use SoftDeletes;

    public $table = 'clients';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'order',
        'title',
        'logo',
        'link',
        'target'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order'=> 'integer',
        'title' => 'string',
        'logo' => 'string',
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
        'title' => 'required',
        'logo' => 'required'
    ];

    
}
