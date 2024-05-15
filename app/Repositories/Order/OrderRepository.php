<?php

namespace App\Repositories\Order;

use App\Repositories\BaseRepository;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\Order;



class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    public function getModel()
    {
        return Order::class;
    }
}

