<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teachers
 * @package App\Models
 * @version January 14, 2020, 10:21 am UTC
 *
 * @property string first_name
 * @property string last_name
 * @property string gender
 * @property string email
 * @property string DOB
 * @property string Phone
 * @property string address
 * @property string current_address
 * @property string nationality
 * @property string passport
 * @property boolean status
 * @property string Date_registered
 * @property integer user_id
 * @property string image
 */
class Teachers extends Model
{
    use SoftDeletes;

    public $table = 'teachers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'DOB',
        'Phone',
        'address',
        'current_address',
        'nationality',
        'passport',
        'status',
        'Date_registered',
        'user_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teachers_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'DOB' => 'date',
        'Phone' => 'string',
        'address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'Date_registered' => 'date',
        'user_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'DOB' => 'required',
        'Phone' => 'required',
        'address' => 'required',
        'current_address' => 'required',
        'nationality' => 'required',
        'passport' => 'required',
        'status' => 'required',
        'Date_registered' => 'required',
        'user_id' => 'required'
    ];

    
}
