<?php

namespace Drupal\tactis_mautic\Service;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Config\ImmutableConfig;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Exception;
use Mautic\Api\Api;
use Mautic\Auth\ApiAuth;
use Mautic\MauticApi;

/**
 * A service of tools used to help support integrating ACS.
 */
class MauticApiService {

  /**
   * The config name.
   *
   * @var string
   */
  protected string $configName = 'tactis_mautic.settings';

  /**
   * The config factory object.
   *
   * @var \Drupal\Core\Config\ImmutableConfig
   */
  protected ImmutableConfig $config;

  /**
   * The Logger factory
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */

  protected LoggerChannelInterface $logger;

  /**
   * The constructor.  It sets the proper config variable.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   Holds the configuration for this module.
   * @param \Drupal\Core\Logger\LoggerChannelFactoryInterface $logger_factory
   *   Holds the logger.
   */
  public function __construct(ConfigFactoryInterface $config_factory, LoggerChannelFactoryInterface $logger_factory) {
    $this->config = $config_factory->get($this->configName);
    $this->logger = $logger_factory->get('mautic');
  }

  private function initApi(string $type): Api|false {

    $mautic_settings = [
      'userName' => $this->config->get('username'),
      // Create a new user.
      'password' => $this->config->get('password'),
      // Make it a secure password.
    ];

    $initAuth = new ApiAuth();
    $auth = $initAuth->newAuth($mautic_settings, 'BasicAuth');

    // Initiate process for obtaining an access token; this will redirect the
    // user to the $authorizationUrl and/or set the access_tokens when the user
    // is redirected back after granting authorization.
    // If the access token is expired, and a refresh token is set above, then a
    // new access token will be requested.
    try {
      // Create an api context by passing in the desired context (Contacts,
      // Forms, Pages, etc), the $auth object from above and the base URL to
      // the Mautic server (i.e. http://my-mautic-server.com/api/)
      $mautic = new MauticApi();
      $api = $mautic->newApi(
        $type,
        $auth,
        $this->config->get('endpoint')
      );
    }
    catch (Exception $e) {
      // Do Error handling.
      $this->logger->error($e->getMessage());
      return FALSE;
    }

    return $api;

  }

  /**
   * Takes a Mautic id and removes the record.
   *
   * @param int $mid
   *   The Mautic ID.
   *
   * @return bool
   *   Returns TRUE on success, FALSE on failure.
   */
  public function deleteContact(int $mid): bool {
    // Create an api context by passing in the desired context (Contacts,
    // Forms, Pages, etc), the $auth object from above and the base URL to
    // the Mautic server (i.e. http://my-mautic-server.com/api/)
    $contactApi = $this->initApi('contacts');
    $response = $contactApi->delete($mid);

    return TRUE;
  }

  /**
   * Update a mautic contact.
   *
   */
  public function updateContact(int $contact_id, array $contact) : bool {

    // Create an api context by passing in the desired context (Contacts,
    // Forms, Pages, etc), the $auth object from above and the base URL to
    // the Mautic server (i.e. http://my-mautic-server.com/api/)
    $api = new MauticApi();
    $contactApi = $this->initApi('contacts');
    $response = $contactApi->edit($contact_id, $contact);

    return true;
  }

  public function addToCampaign(int $campaign_id, int $contact_id) : bool {
    // Create an api context by passing in the desired context (Contacts,
    // Forms, Pages, etc), the $auth object from above and the base URL to
    // the Mautic server (i.e. http://my-mautic-server.com/api/)
    $campaignApi = $this->initApi('campaigns');
    $response = $campaignApi->addContact($campaign_id, $contact_id);

    return true;
  }

  public function addToSegment(int $segment_id, int $contact_id) : bool {
    // Create an api context by passing in the desired context (Contacts,
    // Forms, Pages, etc), the $auth object from above and the base URL to
    // the Mautic server (i.e. http://my-mautic-server.com/api/)
    $segmentApi = $this->initApi('segments');
    $response = $segmentApi->addContact($segment_id, $contact_id);

    return true;
  }
}
