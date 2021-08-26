<?php

namespace Johnstyle\RedmineBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Class Configuration
 *
 * @author  Jonathan SAHM <contact@johnstyle.fr>
 * @package Johnstyle\RedmineBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        if (Kernel::VERSION_ID > 40000) {
            $treeBuilder = new TreeBuilder('johnstyle_redmine');
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $treeBuilder = new TreeBuilder();
            $rootNode = $treeBuilder->root('johnstyle_redmine');
        }

        $rootNode
            ->children()
                ->scalarNode('url')->isRequired()->end()
                ->scalarNode('token')->isRequired()->end()
            ->end()
        ;
        return $treeBuilder;
    }
}
