<?php

declare(strict_types=1);

namespace App\Service\PackGroupService;

use App\Service\DeliveryService\DeliveryCostDto;
use App\Service\DeliveryService\DeliveryServiceInterface;

class PackGroupDeliveryService implements DeliveryServiceInterface
{
    public function calculateDeliveryCost(float $weight): DeliveryCostDto
    {
        return (new DeliveryCostDto())->setCost(round($weight, 2));
    }
}