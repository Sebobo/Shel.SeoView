<?php

namespace Shel\SeoView\Eel\Helper;

/*                                                                        *
 * This script belongs to the Flow package "Shel.SeoView".                *
 *                                                                        *
 * @author Sebastian Helzle <sebastian@helzle.it>                         *
 *                                                                        */

use Neos\Flow\Annotations as Flow;
use TYPO3\Eel\ProtectedContextAwareInterface;

/**
 * String helpers for Eel contexts
 *
 * @Flow\Proxy(false)
 */
class ReadabilityHelper implements ProtectedContextAwareInterface
{
    /**
     * Get length of a text
     *
     * @param string $text The input text
     * @return integer Length of the text
     */
    public function textLength($text)
    {
        return Text::textLength($text);
    }


    /**
     * All methods are considered safe
     *
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}
