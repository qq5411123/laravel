<?php
namespace App\Services\Order\Services;

use App\Services\Order\Interfaces\OrderRepositoryInterface;
use App\User;
use App\Services\Order\Models\Orders;

class OrderService implements OrderRepositoryInterface{

    public function userOrders(User $user){
        Orders::where('user_id', '=', $user->id)->get();
    }


}
