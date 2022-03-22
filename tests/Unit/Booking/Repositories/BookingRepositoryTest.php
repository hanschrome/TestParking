<?php

declare(strict_types=1);

namespace Tests\Unit\Boooking\Repositories;

use PHPUnit\Framework\TestCase;
use Src\Domain\Reservation\Reservation;

class BookingRepositoryTesting extends TestCase
{

    public function getReservation_withId_ReturnsReservation(): Reservation
    {
        return new Reservation();
    }

    public function createReservation_withValidData_ReturnsReservation(): Reservation
    {
        return new Reservation();
    }
}
