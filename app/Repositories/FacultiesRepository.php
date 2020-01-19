<?php

namespace App\Repositories;

use App\Models\Faculties;
use App\Repositories\BaseRepository;

/**
 * Class FacultiesRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:06 am UTC
*/

class FacultiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'faculty_id';
    protected $fieldSearchable = [
        'faculty_name',
        'faculty_code',
        'faculty_desc',
        'faculty_status'
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
        return Faculties::class;
    }
}
