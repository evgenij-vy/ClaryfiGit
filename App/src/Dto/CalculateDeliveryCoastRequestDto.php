<?php

declare(strict_types=1);

namespace App\Dto;

use App\Enum\CarrierEnum;

class CalculateDeliveryCoastRequestDto
{
    private ?CarrierEnum $carrier = null;
    private ?float $weight = null;

    public function getCarrier(): ?CarrierEnum
    {
        return $this->carrier;
    }

    public function setCarrier(?CarrierEnum $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
