<?php

namespace App\Repositories;

use App\Models\testimonials;
use InfyOm\Generator\Common\BaseRepository;

class testimonialsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order',
        'photo',
        'name',
        'position',
        'company',
        'testimonial'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return testimonials::class;
    }
}
