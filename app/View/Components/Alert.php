<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * 警告类型
     *
     * @var string
     */
    public $type;

    /**
     * 警告消息
     *
     * @var string
     */
    public $message;

    /**
     * 创建组件实例
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * 获取组件的视图 / 内容
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
