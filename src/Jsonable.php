<?php /** @noinspection SpellCheckingInspection */

namespace Envorra\Castables;

/**
 * Jsonable
 *
 * @package Envorra\Castables
 */
interface Jsonable
{
    /**
     * JSON representation.
     *
     * @return string
     */
    public function toJson(): string;
}
