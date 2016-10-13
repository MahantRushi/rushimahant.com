<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class homepages
 * @package App\Models
 * @version October 12, 2016, 12:53 pm UTC
 */
class homepages extends Model
{
    use SoftDeletes;

    public $table = 'homepages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'order',
        'icon',
        'title',
        'punchline',
        'backgroundImage',
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
        'icon' => 'string',
        'title' => 'string',
        'punchline' => 'string',
        'backgroundImage' => 'string',
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
        'icon' => 'required',
        'title' => 'required',
        'punchline' => 'required',
        'link' => 'required',
        'target' => 'required'
    ];

    
}
