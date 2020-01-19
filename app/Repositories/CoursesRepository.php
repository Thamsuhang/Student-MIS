<?php

namespace App\Repositories;

use App\Models\Courses;
use App\Repositories\BaseRepository;

/**
 * Class CoursesRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:05 am UTC
*/

class CoursesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'course_id';
    protected $fieldSearchable = [
        'course_name',
        'course_code',
        'course_desc',
        'status'
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
        return Courses::class;
    }
}
