<?php

namespace Shel\SeoView\Eel\Helper;

/*                                                                        *
 * This script belongs to the Flow package "Shel.SeoView".                *
 *                                                                        *
 * @author Sebastian Helzle <sebastian@helzle.it>                         *
 *                                                                        */

use DaveChild\TextStatistics\Text;
use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;

/**
 * Readability helper for strings
 *
 * @Flow\Proxy(false)
 */
class ReadabilityHelper implements ProtectedContextAwareInterface
{
    /**
     * Get character count of a text
     *
     * @param string $text The input text
     * @return integer Length of the text
     */
    public function characterCount($text)
    {
        return Text::characterCount($text);
    }

    /**
     * Get number of words in a text
     *
     * @param string $text The input text
     * @return integer Length of the text
     */
    public function wordCount($text)
    {
        return Text::wordCount($text);
    }

    /**
     * Get number of sentences in a text
     *
     * @param string $text The input text
     * @return integer Length of the text
     */
    public function sentenceCount($text)
    {
        return Text::sentenceCount($text);
    }

    /**
     * Get average words per sentence in a text
     *
     * @param string $text The input text
     * @return integer Length of the text
     */
    public function averageWordsPerSentence($text)
    {
        return Text::averageWordsPerSentence($text);
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
