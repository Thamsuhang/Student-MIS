<?php

namespace App\Repositories;

use App\Models\Days;
use App\Repositories\BaseRepository;

/**
 * Class DaysRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:07 am UTC
*/

class DaysRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'days_id';
    protected $fieldSearchable = [
        'day_name'
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
        return Days::class;
    }
}
