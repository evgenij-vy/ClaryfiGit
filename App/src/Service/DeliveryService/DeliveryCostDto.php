<?php

declare(strict_types=1);

namespace App\Service\DeliveryService;

class DeliveryCostDto
{
    private ?float $cost = null;
    private ?string $currency = 'EURO';

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}