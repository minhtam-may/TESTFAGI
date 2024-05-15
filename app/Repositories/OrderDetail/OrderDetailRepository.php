<?php

namespace App\Repositories\OrderDetail;

use App\Repositories\BaseRepository;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\Order;
use App\Models\OrderDetail;




class OrderDetailRepository extends BaseRepository implements OrderDetailRepositoryInterface
{
    public function getModel()
    {
        return OrderDetail::class;
    }
}

