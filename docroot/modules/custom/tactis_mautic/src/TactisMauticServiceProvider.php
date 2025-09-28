<?php

namespace Drupal\tactis_mautic;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

class TactisMauticServiceProvider extends ServiceProviderBase {

  public function register(ContainerBuilder $container): void {
    parent::register($container);

    $myServices = [
      'Drupal\tactis_mautic\Service\MauticApiService' => [
        'autowired' => true,
        'public' => true,
        'arguments' => [
          new Reference('config.factory'),
          new Reference('logger.factory'),
        ]
      ],
    ];

    foreach ($myServices as $class => $options){
      if ($container->hasDefinition($class)) {
        continue;
      }

      $definition = new Definition($class);
      if ($options['autowired']) {
        $definition->setAutowired(TRUE);
      }
      if ($options['public']) {
        $definition->setPublic(TRUE);
      }
      if ($options['arguments']) {
        $definition->setArguments($options['arguments']);
      }

      $container->setDefinition($class, $definition);

    }

  }
}
