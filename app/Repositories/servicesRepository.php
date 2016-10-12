<?php

namespace App\Repositories;

use App\Models\services;
use InfyOm\Generator\Common\BaseRepository;

class servicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order',
        'logo',
        'title',
        'description',
        'link',
        'target'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return services::class;
    }
}
