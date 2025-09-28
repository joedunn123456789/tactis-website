<?php

namespace Drupal\tactis_general;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

class TactisGeneralServiceProvider extends ServiceProviderBase {

  public function alter(ContainerBuilder $container) {

    $container->register('tactis_general.route_subscriber',
    '\Drupal\tactis_general\Routing\RouteSubscriber')
      ->addTag('event_subscriber');

    $container->register('tactis_general.user_profile_access',
      '\Drupal\tactis_general\Access\UserProfileAccessCheck')
    ->addTag('access_check');

  }
}
