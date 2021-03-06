<?php

namespace App\Repositories\Contracts;

interface UserRepositoryContract extends BaseRepositoryContract
{
    public function findProductCartsByUserId (string $userId);

    public function findProductCartsByUserIdAndProductIds (string $userId, array $productIds);
}