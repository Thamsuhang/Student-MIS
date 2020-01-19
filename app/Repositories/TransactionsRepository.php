<?php

namespace App\Repositories;

use App\Models\Transactions;
use App\Repositories\BaseRepository;

/**
 * Class TransactionsRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:16 am UTC
*/

class TransactionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid',
        'transaction_date',
        'remark',
        'trans_desc'
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
        return Transactions::class;
    }
}
