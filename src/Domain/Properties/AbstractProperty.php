<?php

declare(strict_types=1);

namespace Src\Domain\Reservation\Properties;


abstract class AbstractProperty implements IProperty
{
    /**
     * @var mixed
     */
    protected $value;

    function sanitize() {
        $this->validate();
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
