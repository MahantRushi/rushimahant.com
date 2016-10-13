<?php

namespace App\Repositories;

use App\Models\clients;
use InfyOm\Generator\Common\BaseRepository;

class clientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order',
        'title',
        'logo',
        'link',
        'target'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clients::class;
    }
}
