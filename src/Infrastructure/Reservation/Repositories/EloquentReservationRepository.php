<?php

declare(strict_types=1);

namespace Src\Infrastructure\Reservation\Repositories;

use Src\Domain\Reservation\Contracts\IReservationRepository;
use Src\Domain\Reservation\Properties\ReservationId;
use Src\Domain\Reservation\Reservation;

class EloquentReservationRepository implements IReservationRepository
{

    function getReservationById(ReservationId $reservationId): Reservation
    {
        return new Reservation(new ReservationId(uniqid()));
    }

    function createReservation(Reservation $reservation): Reservation
    {
        return new Reservation(new ReservationId(uniqid()));
    }
}