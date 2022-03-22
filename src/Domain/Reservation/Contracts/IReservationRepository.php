<?php

declare(strict_types=1);

namespace Src\Domain\Reservation\Contracts;

use Src\Domain\Reservation\Properties\ReservationId;
use Src\Domain\Reservation\Reservation;

interface IReservationRepository
{

    function getReservationById(ReservationId $reservationId): Reservation;

    function createReservation(Reservation $reservation): Reservation;
}
