<?php

/*
 * This file is part of the Miky package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Miky\Component\Resource\Exception;

class UnexpectedTypeException extends \InvalidArgumentException
{
    /**
     * @param mixed  $value
     * @param string $expectedType
     */
    public function __construct($value, $expectedType)
    {
        parent::__construct(sprintf(
            'Expected argument of type "%s", "%s" given.',
            $expectedType,
            is_object($value) ? get_class($value) : gettype($value)
        ));
    }
}
