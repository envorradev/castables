<?php /** @noinspection SpellCheckingInspection */

namespace Envorra\Castables;

use Stringable as BaseStringable;

/**
 * Stringable
 *
 * @package Envorra\Castables
 */
interface Stringable extends BaseStringable
{
    /**
     * String representation.
     *
     * @return string
     */
    public function toString(): string;
}
