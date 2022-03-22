<?php

declare(strict_types=1);

namespace Src\Domain\Properties;

interface IProperty
{
    function sanitize();

    function validate();
}
