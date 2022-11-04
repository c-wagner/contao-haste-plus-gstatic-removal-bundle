<?php

// src/EventListener/ParseFrontendTemplateListener.php
namespace CWagner\ContaoHastePlusGstaticRemovalBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\PageRegular;
use Contao\LayoutModel;
use Contao\PageModel;

/**
 * @Hook("parseFrontendTemplate")
 */
class GeneratePageListener
{

    public function removeGstatic(PageModel $pageModel, LayoutModel $layout, PageRegular $pageRegular): void
    {
        unset($GLOBALS['TL_JAVASCRIPT']['google_charts_loader']);
    }

}