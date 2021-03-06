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

/**
 * @author Jan Góralski <jan.goralski@lakion.com>
 */
class UnsupportedMethodException extends \Exception
{
    /**
     * @param string $methodName
     */
    public function __construct($methodName)
    {
        parent::__construct(sprintf(
            'The method "%s" is not supported.',
            $methodName
        ));
    }
}
