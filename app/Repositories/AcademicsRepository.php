<?php

namespace App\Repositories;

use App\Models\Academics;
use App\Repositories\BaseRepository;

/**
 * Class AcademicsRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:07 am UTC
*/

class AcademicsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'academic_id';
    protected $fieldSearchable = [
        'academic_year'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Academics::class;
    }
}
