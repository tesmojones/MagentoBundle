<?php

namespace Astrus\MagentoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('astrus_magento');
        $rootNode
            ->children()
                ->scalarNode('mage_file')->isRequired()->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}
