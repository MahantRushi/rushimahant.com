<?php

namespace App\Repositories;

use App\Models\education;
use InfyOm\Generator\Common\BaseRepository;

class educationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order',
        'title',
        'institution',
        'description',
        'country',
        'end'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return education::class;
    }
}
