<?php

namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
/**
 * Class SendShipmentNotification 监听器
 * @package App\Listeners
 */
class SendShipmentNotification implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * 任务应该发送到的队列的名称
     *
     * @var string|null
     */
    public $connection = 'database';

    public $queue = 'listeners';

    public $delay = 60 * 1;


    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderShipped  $event
     * @return void
     */
    public function handle(OrderShipped $event)
    {
        $ee = $event->post->id;
        echo "监听器SendShipmentNotification处理中。。。。<br/>-----------------------";
//        print_r($ee);
//        return false;
        Log::info("队列处理：" . $ee);

//        return false;
    }


    //有时候队列中的事件监听器可能会执行失败。如果队列中的监听器任务执行时超出了队列进程定义的最大尝试次数，
    //failed 方法接收事件实例和导致失败的异常
    public function failed(OrderShipped $event, $exception)
    {
        //
    }




}
