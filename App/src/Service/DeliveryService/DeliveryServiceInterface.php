<?php

declare(strict_types=1);

namespace App\Service\DeliveryService;

interface DeliveryServiceInterface
{
    public function calculateDeliveryCost(float $weight): DeliveryCostDto;
}