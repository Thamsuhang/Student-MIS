<?php

namespace App\Repositories;

use App\Models\Batches;
use App\Repositories\BaseRepository;

/**
 * Class BatchesRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:04 am UTC
*/

class BatchesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'batch_id';
    protected $fieldSearchable = [
        'batch'
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
        return Batches::class;
    }
}
