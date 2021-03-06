<?php

declare(strict_types=1);

namespace Src\Domain\Reservation;

use Src\Domain\Reservation\Properties\ReservationId;

class Reservation
{
    public ReservationId $reservationId;

    public function __construct(ReservationId $reservationId)
    {
        $this->reservationId = $reservationId;
    }
}
