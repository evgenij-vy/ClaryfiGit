<?php

declare(strict_types=1);

namespace App\Service\TransCompanyService;

use App\Service\DeliveryService\DeliveryCostDto;
use App\Service\DeliveryService\DeliveryServiceInterface;

class TransCompanyDeliveryService implements DeliveryServiceInterface
{
    public function calculateDeliveryCost(float $weight): DeliveryCostDto
    {
        return (new DeliveryCostDto())->setCost($weight > 10 ? 100 : 20);
    }
}