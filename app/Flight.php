<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * 与模型关联的表名
     *
     * @var string
     */
    protected $table = 'flights';

    /**
     * 重定义主键
     *
     * @var string
     */
    protected $primaryKey = 'id';

}
