<?php

namespace App\Repositories;

use App\Models\facts;
use InfyOm\Generator\Common\BaseRepository;

class factsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order',
        'icon',
        'caption'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return facts::class;
    }
}
