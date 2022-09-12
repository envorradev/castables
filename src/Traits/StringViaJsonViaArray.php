<?php

namespace Envorra\Castables\Traits;

/**
 * StringViaJsonViaArray
 *
 * @package Envorra\Castables\Traits
 */
trait StringViaJsonViaArray
{
    /**
     * Array representation.
     *
     * @return array
     */
    abstract public function toArray(): array;

    /**
     * JSON representation.
     *
     * @return string
     */
    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    /**
     * String representation.
     *
     * @return string
     */
    public function toString(): string
    {
        return $this->toJson();
    }

    /**
     * Handles casting to string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->toString();
    }
}
