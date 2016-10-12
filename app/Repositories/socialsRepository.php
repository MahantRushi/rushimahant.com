<?php

namespace App\Repositories;

use App\Models\socials;
use InfyOm\Generator\Common\BaseRepository;

class socialsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'icon',
        'link',
        'target'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return socials::class;
    }
}
