<?php

namespace Shel\SeoView\Controller;

/*                                                                        *
 * This script belongs to the Neos package "Shel.SeoView".                *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use TYPO3\Neos\Domain\Model\Site;

/**
 * Controller
 *
 * @Flow\Scope("singleton")
 */
class ContentTransferController extends ActionController
{

    /**
     * Shows form to transfer content
     * @param Site $sourceSite
     * @param Site $targetSite
     * @param string $targetParentNodePath
     */
    public function indexAction(Site $sourceSite = null, Site $targetSite = null, $targetParentNodePath = '')
    {
    }
}
