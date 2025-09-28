<?php

namespace Drupal\tactis_general\Access;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * Restricts access to user profile pages.
 */
class UserProfileAccessCheck implements AccessInterface {

  /**
   * Determines access to user profile pages.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The currently logged-in user.
   * @param int $user
   *   The user ID from the route.
   *
   * @return \Drupal\Core\Access\AccessResult
   *   The access result.
   */
  public function access(AccountInterface $account, $user) {
    // Allow access for the user viewing their own profile.
    if ($account->id() == $user) {
      return AccessResult::allowed();
    }

    // Restrict access for all other users.
    return AccessResult::forbidden();
  }
}

