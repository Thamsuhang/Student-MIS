<?php

namespace App\Repositories;

use App\Models\ClassSchedulings;
use App\Repositories\BaseRepository;

/**
 * Class ClassSchedulingsRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:09 am UTC
*/

class ClassSchedulingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'class_schedule_id';
    protected $fieldSearchable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'teacher_id',
        'start_time',
        'end_time',
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
        return ClassSchedulings::class;
    }
}
