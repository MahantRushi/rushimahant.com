<?php

namespace App\Repositories;

use App\Models\skills;
use InfyOm\Generator\Common\BaseRepository;

class skillsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order',
        'type',
        'title',
        'icon',
        'level'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return skills::class;
    }
}
