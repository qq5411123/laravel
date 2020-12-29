<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\Poststest;
use Illuminate\Support\Facades\Log;

class SendReminderEmail implements ShouldQueue
{
//生成的类实现了 Illuminate\Contracts\Queue\ShouldQueue 接口，
//这意味着这个任务将会被推送到队列中，而不是同步执行。
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $posts;

    /**
     * Create a new job instance.
     * 创建一个新的任务实例。
     * @return void
     */
    public function __construct(Poststest $pp)
    {
        //
        $this->posts = $pp;
    }

    /**
     * Execute the job.
     * 让队列用来调用此任务的 handle 方法
     *
     * @return void
     */
    public function handle()
    {
        //
//        echo "队列调用任务SendReminderEmail 打印出任务类的实例<br>-------------";
        Log::info([
            'id' => $this->posts->id,
            'title' => $this->posts->title
        ]);

//        print_r($this->posts);
    }
}
