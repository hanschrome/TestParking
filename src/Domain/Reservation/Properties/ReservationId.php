<?php

declare(strict_types=1);

namespace Src\Domain\Reservation\Properties;

use Src\Domain\Properties\AbstractProperty;
use Src\Domain\Reservation\Exceptions\ReservationWrongPropertiesException;

/**
 * @method getValue() string
 */
class ReservationId extends AbstractProperty
{
    public function __construct(string $id)
    {
        $this->value = $id;
    }

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
