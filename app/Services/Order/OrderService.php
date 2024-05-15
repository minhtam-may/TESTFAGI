<?php

namespace App\Services\Order;
use App\Services\BaseService;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderService extends BaseService implements OrderServiceInterface
{
    public $repository;

    public function __construct(OrderRepositoryInterface $OrderRepository)
    {
        $this->repository = $OrderRepository;
    }

}