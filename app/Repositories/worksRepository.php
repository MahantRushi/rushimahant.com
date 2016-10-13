<?php

namespace App\Repositories;

use App\Models\works;
use InfyOm\Generator\Common\BaseRepository;

class worksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order',
        'title',
        'company',
        'country',
        'start',
        'end',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return works::class;
    }
}
