<?php

declare(strict_types=1);

namespace Tests\Unit\Boooking\Repositories;

use PHPUnit\Framework\TestCase;
use Src\Domain\Reservation\Contracts\IReservationRepository;
use Src\Domain\Reservation\Properties\ReservationId;
use Src\Domain\Reservation\Reservation;
use Src\Infrastructure\Reservation\Repositories\EloquentReservationRepository;

class ReservationRepositoryTesting extends TestCase
{
    private IReservationRepository $iReservationRepository;

    protected function setUp(): void
    {
        parent::setUp();

        $this->iReservationRepository = app(EloquentReservationRepository::class);
    }

    public function getReservation_withId_ReturnsReservation(): void
    {
        $id = uniqid();

        $reservation = $this->iReservationRepository->getReservationById(new ReservationId($id));

        $this->assertInstanceOf(Reservation::class, $reservation);
    }

    public function createReservation_withValidData_ReturnsReservation(): void
    {
        $id = uniqid();
        $reservationId = new ReservationId($id);

        $reservation = $this->iReservationRepository->createReservation(new Reservation($reservationId));

        $this->assertInstanceOf(Reservation::class, $reservation);
    }
}
