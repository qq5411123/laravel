<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\OrderShipped;
use App\Models\Poststest;
use App\Jobs\SendReminderEmail;
use Carbon\Carbon;
class PostsController extends Controller
{
    //
    public  function shijianfenfa()
    {
        $pp = Poststest::all();

//        print_r($pp);
        //事件分发 部分任务加入队列延迟1分钟
        foreach ($pp as $item) {
            event(new OrderShipped($item));
        }




//        队列
//        加入队列延迟3分钟
        foreach ($pp as $item) {
            SendReminderEmail ::dispatch($item)->delay(Carbon::now()->addMinutes(3));
        }

//        SendReminderEmail::dispatch(Poststest::all())->delay(Carbon::now()->addMinutes(10));

    }
}
