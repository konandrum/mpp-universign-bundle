<?php

declare(strict_types=1);

namespace Mpp\UniversignBunlde\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    const CONFIGURATION_ROOT = 'mpp_universign';

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(self::CONFIGURATION_ROOT);

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('data')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}