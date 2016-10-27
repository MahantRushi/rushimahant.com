<?php

namespace App\Repositories;

use App\Models\portfolio;
use InfyOm\Generator\Common\BaseRepository;

class portfolioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order',
        'title',
        'punchline',
        'main_image',
        'icon',
        'about',
        'made_for',
        'description',
        'video_link',
        'lightbox_image',
        'soundcloud_link',
        'gallery',
        'external_link',
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return portfolio::class;
    }
}
