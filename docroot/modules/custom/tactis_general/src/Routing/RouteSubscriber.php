<?php

namespace Drupal\tactis_general\Routing;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\RouteCollection;

/**
 * Modifies user profile route access.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    // Modify the user profile route access.

    if ($route = $collection->get('entity.user.canonical')) {
      // Apply only our custom access check.
      $route->setRequirement('_custom_access', 'tactis_general.user_profile_access::access');
    }
  }
}
