<?php

namespace App\Repositories;

use App\Models\homepages;
use InfyOm\Generator\Common\BaseRepository;

class homepagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order',
        'icon',
        'title',
        'punchline',
        'backgroundImage',
        'link',
        'target'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return homepages::class;
    }
}
