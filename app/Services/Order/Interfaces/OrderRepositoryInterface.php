<?php

namespace App\Services\Order\Interfaces;

use App\User;

interface OrderRepositoryInterface{
    public function userOrders(User $user);
}

