<?php

declare(strict_types=1);

namespace Src\Domain\Reservation\Properties;

use Src\Domain\Reservation\Exceptions\ReservationWrongPropertiesException;

class ReservationId extends AbstractProperty
{

    /**
     * @throws ReservationWrongPropertiesException
     */
    function validate()
    {
        if (!preg_match('/^[a-z0-9]{13}$/', $this->getValue()))
        {
            throw new ReservationWrongPropertiesException();
        }
    }
}
