<?php

declare(strict_types=1);

namespace App\Controller;

use App\Dto\CalculateDeliveryCoastRequestDto;
use App\Service\CarrierService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

class DeliveryController extends AbstractController
{
    #[Route('/carriers', name: 'get_carriers', methods: ['GET'])]
    public function getCarriers(CarrierService $carrierService): JsonResponse
    {
        return $this->json($carrierService->getAvailableCarriers());
    }

    #[Route('/calculate_delivery_coast', name: 'calculate_delivery_coast', methods: ['POST'])]
    public function calculateDeliveryCost(
        #[MapRequestPayload]
        CalculateDeliveryCoastRequestDto $deliveryCoastRequestDto,
        CarrierService $carrierService
    ): JsonResponse
    {
        return $this->json(
            $carrierService->getDeliveryService($deliveryCoastRequestDto->getCarrier())
                ->calculateDeliveryCost($deliveryCoastRequestDto->getWeight())
        );
    }
}