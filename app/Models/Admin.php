<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * class Admin
 * 
 * @property integer $id
 * @property boolean $username
 * @property string $realname
 * @property string $auth_key
 * @property string $password_hash
 * @property string $phone
 * @property string $email
 * @property integer $partner_aid
 * @property integer $director_aid
 * @property integer $manager_aid
 * @property integer $role_type
 * @property integer $depart_id
 * @property integer $status
 * @property integer $task_nums
 * @property integer $sub_account
 * @property double $sales_money
 * @property double $received_money
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property integer $add_uid
 */
class Admin extends Model
{

    /**
     * The table associated with the file.
     *
     * @var string
     */
    protected $table = 'admin';

    /**
     * The primary key for the file.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'username',

        'realname',

        'auth_key',

        'password_hash',

        'phone',

        'email',

        'partner_aid',

        'director_aid',

        'manager_aid',

        'role_type',

        'depart_id',

        'status',

        'task_nums',

        'sub_account',

        'sales_money',

        'received_money',

        'add_uid',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

        'username',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

        'username' => 'boolean',

    ];

    const RuleList = [

        'username' => ['required', 'max:32', 'after_or_equal', 'integer'],

        'realname' => ['required', 'max:20'],

        'auth_key' => ['required', 'max:32'],

        'password_hash' => ['required', 'max:255'],

        'phone' => ['required', 'max:11'],

        'email' => ['required', 'max:255'],

        'partner_aid' => ['required', 'integer'],

        'director_aid' => ['required', 'integer'],

        'manager_aid' => ['required', 'integer'],

        'role_type' => ['required', 'integer'],

        'depart_id' => ['required', 'integer'],

        'status' => ['required', 'integer'],

        'task_nums' => ['required', 'integer'],

        'sub_account' => ['required', 'integer'],

        'sales_money' => ['required', 'numeric'],

        'received_money' => ['required', 'numeric'],

        'add_uid' => ['required', 'integer'],

    ];


    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}