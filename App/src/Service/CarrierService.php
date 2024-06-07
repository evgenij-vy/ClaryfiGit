<?php

declare(strict_types=1);

namespace App\Service;

use App\Enum\CarrierEnum;
use App\Service\DeliveryService\DeliveryServiceInterface;
use App\Service\PackGroupService\PackGroupDeliveryService;
use App\Service\TransCompanyService\TransCompanyDeliveryService;

readonly class CarrierService
{
    public function __construct(
        private PackGroupDeliveryService    $packGroupDeliveryService,
        private TransCompanyDeliveryService $transCompanyDeliveryService
    )
    {
    }

    /**
     * @return CarrierEnum[]
     */
    public function getAvailableCarriers(): array
    {
        return CarrierEnum::cases();
    }

    public function getDeliveryService(CarrierEnum $carrier): DeliveryServiceInterface
    {
        return match ($carrier) {
            CarrierEnum::PackGroup => $this->packGroupDeliveryService,
            CarrierEnum::TransCompany => $this->transCompanyDeliveryService
        };
    }
}