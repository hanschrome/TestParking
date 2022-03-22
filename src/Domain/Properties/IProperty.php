<?php

declare(strict_types=1);

namespace Src\Domain\Reservation\Properties;

interface IProperty
{
    function sanitize();

    function validate();
}
