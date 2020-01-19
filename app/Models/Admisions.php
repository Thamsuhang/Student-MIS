<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admisions
 * @package App\Models
 * @version January 14, 2020, 10:20 am UTC
 *
 * @property string roll_no
 * @property string first_name
 * @property string last_name
 * @property string father_name
 * @property string mother_name
 * @property string gender
 * @property string email
 * @property string DOB
 * @property string Phone
 * @property string address
 * @property string current_address
 * @property string nationality
 * @property string passport
 * @property boolean status
 * @property string Date registered
 * @property integer user_id
 * @property integer class_id
 * @property string image
 */
class Admisions extends Model
{
    use SoftDeletes;

    public $table = 'admisions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'admission_id';



    public $fillable = [
        'roll_no',
        'first_name',
        'last_name',
        'father_name',
        'mother_name',
        'gender',
        'email',
        'DOB',
        'Phone',
        'address',
        'current_address',
        'nationality',
        'passport',
        'status',
        'Date registered',
        'user_id',
        'class_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'roll_no' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'father_name' => 'string',
        'mother_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'DOB' => 'date',
        'Phone' => 'string',
        'address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'Date registered' => 'date',
        'user_id' => 'integer',
        'class_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'roll_no' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'father_name' => 'required',
        'mother_name' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'DOB' => 'required',
        'Phone' => 'required',
        'address' => 'required',
        'current_address' => 'required',
        'nationality' => 'required',
        'passport' => 'required',
        'status' => 'required',
        'Date registered' => 'required',
        'user_id' => 'required',
        'class_id' => 'required'
    ];

    
}
