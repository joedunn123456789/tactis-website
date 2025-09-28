<?php

namespace Drupal\tactis_mautic\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a form that configures module settings.
 */
class ConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'tactis_mautic_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'tactis_mautic.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('tactis_mautic.settings');

    $form['endpoint'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Endpoint'),
      '#default_value' => $config->get('endpoint'),
    ];

    $form['public_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Public Key'),
      '#default_value' => $config->get('public_key'),
    ];

    $form['secret_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Secret Key'),
      '#default_value' => $config->get('secret_key'),
    ];

    $form['username'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API Username'),
      '#default_value' => $config->get('username'),
    ];

    $form['password'] = [
      '#type' => 'password',
      '#title' => $this->t('API Password'),
      '#default_value' => $config->get('password'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $config = $this->config('tactis_mautic.settings');

    // Password field requires special handling since default_value
    // doesn't work.
    if (!empty($values['password'])) {
      $config->set('password', $values['password']);
    }

    $config
      ->set('endpoint', $values['endpoint'])
      ->set('public_key', $values['public_key'])
      ->set('secret_key', $values['secret_key'])
      ->set('username', $values['username'])
      ->save();

    $this->messenger()->addStatus('Configuration saved.');
  }

}
