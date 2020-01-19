<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transactions
 * @package App\Models
 * @version January 14, 2020, 10:16 am UTC
 *
 * @property integer student_id
 * @property integer fee_id
 * @property integer user_id
 * @property integer paid
 * @property string transaction_date
 * @property string remark
 * @property string trans_desc
 */
class Transactions extends Model
{
    use SoftDeletes;

    public $table = 'transctions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'trans_id';



    public $fillable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid',
        'transaction_date',
        'remark',
        'trans_desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'trans_id' => 'integer',
        'student_id' => 'integer',
        'fee_id' => 'integer',
        'user_id' => 'integer',
        'paid' => 'integer',
        'transaction_date' => 'date',
        'remark' => 'string',
        'trans_desc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required',
        'fee_id' => 'required',
        'user_id' => 'required',
        'paid' => 'required',
        'transaction_date' => 'required',
        'remark' => 'required',
        'trans_desc' => 'required'
    ];

    
}
