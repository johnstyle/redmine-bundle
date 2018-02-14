<?php

namespace Johnstyle\RedmineBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class JohnstyleRedmineExtension
 *
 * @author  Jonathan SAHM <contact@johnstyle.fr>
 * @package Johnstyle\RedmineBundle\DependencyInjection
 */
class JohnstyleRedmineExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter(sprintf('%s.url', $this->getAlias()), $config['url']);
        $container->setParameter(sprintf('%s.token', $this->getAlias()), $config['token']);
    }
}
