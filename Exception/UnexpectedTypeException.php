<?php

namespace Ekyna\Bundle\SurveyBundle\Exception;

/**
 * Class UnexpectedTypeException
 * @package Ekyna\Bundle\SurveyBundle\Exception
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
class UnexpectedTypeException extends InvalidArgumentException
{
    /**
     * @param string $value
     * @param int $expectedType
     */
    public function __construct($value, $expectedType)
    {
        parent::__construct(sprintf('Expected argument of type "%s", "%s" given', $expectedType, is_object($value) ? get_class($value) : gettype($value)));
    }
}
