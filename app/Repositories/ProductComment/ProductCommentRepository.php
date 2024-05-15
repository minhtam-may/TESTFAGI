<?php

namespace App\Repositories\ProductComment;

use App\Repositories\BaseRepository;
use App\Models\Product;
use App\Models\ProductComment;


class ProductCommentRepository extends BaseRepository implements ProductCommentRepositoryInterface
{
    public function getModel()
    {
        return ProductComment::class;
    }
}