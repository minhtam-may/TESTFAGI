<?php

namespace App\Repositories\User;

use App\Repositories\BaseRepository;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\Order;
use App\Models\User;




class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function getModel()
    {
        return User::class;
    }
}

