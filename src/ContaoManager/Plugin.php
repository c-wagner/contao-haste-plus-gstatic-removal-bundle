<?php

// src/ContaoManager/Plugin.php
namespace CWagner\ContaoHastePlusGstaticRemovalBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use CWagner\ContaoHastePlusGstaticRemovalBundle\ContaoHastePlusGstaticRemovalBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoHastePlusGstaticRemovalBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}