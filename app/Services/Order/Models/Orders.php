<?php

namespace App\Services\Order\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * class Orders
 *
 * @property integer $id
 * @property integer $uid
 * @property string $user_uname
 * @property string $user_realname
 * @property integer $user_type
 * @property integer $user_is_contract
 * @property integer $type
 * @property string $order_no
 * @property integer $pay_status
 * @property double $sum_money
 * @property double $money
 * @property string $currency_code
 * @property string $pay_time
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property integer $pay_type
 * @property string $trade_no
 * @property integer $status
 * @property integer $is_test
 */
class Orders extends Model
{



    /**
     * The table associated with the file.
     *
     * @var string
     */
    protected $table = 'orders';

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

        'uid',

        'user_uname',

        'user_realname',

        'user_type',

        'user_is_contract',

        'type',

        'order_no',

        'pay_status',

        'sum_money',

        'money',

        'currency_code',

        'pay_time',

        'pay_type',

        'trade_no',

        'status',

        'is_test',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    const RuleList = [

        'uid' => ['required', 'integer'],

        'user_uname' => ['required', 'max:50'],

        'user_realname' => ['required', 'max:50'],

        'user_type' => ['required', 'integer'],

        'user_is_contract' => ['required', 'integer'],

        'type' => ['required', 'integer'],

        'order_no' => ['required', 'max:32'],

        'pay_status' => ['required', 'integer'],

        'sum_money' => ['required', 'numeric'],

        'money' => ['required', 'numeric'],

        'currency_code' => ['required', 'max:3'],

        'pay_time' => ['required'],

        'pay_type' => ['required', 'integer'],

        'trade_no' => ['required', 'max:50'],

        'status' => ['required', 'integer'],

        'is_test' => ['required', 'integer'],

    ];


}
