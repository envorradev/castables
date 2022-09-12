<?php /** @noinspection SpellCheckingInspection */

namespace Envorra\Castables;

/**
 * Arrayable
 *
 * @package Envorra\Castables
 */
interface Arrayable
{
    /**
     * Array representation.
     *
     * @return array
     */
    public function toArray(): array;
}
