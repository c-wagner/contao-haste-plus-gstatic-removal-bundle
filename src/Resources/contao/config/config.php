<?php

use \CWagner\ContaoHastePlusGstaticRemovalBundle\EventListener\GeneratePageListener;

$GLOBALS['TL_HOOKS']['generatePage'][] = [GeneratePageListener::class,'removeGstatic'];
