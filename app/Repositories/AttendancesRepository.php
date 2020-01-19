<?php

namespace App\Repositories;

use App\Models\Attendances;
use App\Repositories\BaseRepository;

/**
 * Class AttendancesRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:17 am UTC
*/

class AttendancesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'attendance_id';
    protected $fieldSearchable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'attendance_status'
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
        return Attendances::class;
    }
}
