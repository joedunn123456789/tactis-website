<?php

namespace Drupal\tactis_webform_handlers\Plugin\WebformHandler;

use Drupal\Core\Form\FormStateInterface;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\WebformSubmissionInterface;

/**
 * Link Mautic Profiles on Webform submission.
 *
 * @WebformHandler(
 *   id = "Validate Webforms",
 *   label = @Translation("Validate Webforms"),
 *   category = @Translation("Tactis"),
 *   description = @Translation("Validate Webform Submissions for english, etc."),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_SINGLE,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \Drupal\webform\Plugin\WebformHandlerInterface::SUBMISSION_OPTIONAL,
 * )
 */

class TactisWebformHandler extends WebformHandlerBase {

  /**
   * {@inheritdoc}
   */
  public function validateForm(
    array &$form,
    FormStateInterface $form_state,
    WebformSubmissionInterface $webform_submission
  ) {
    parent::validateForm($form, $form_state, $webform_submission);
    if (! $this->isEnglish($form_state->getValue('message'))){
      $form_state->setErrorByName(
        'message',
        'Unable to translate content.'
      );
    }
  }

  /**
   * Determines if the string is in English.
   *
   * @param string $str
   *   The string to validate.
   *
   * @return bool
   */
  private function isEnglish(string $str): bool {
    if (strlen($str) != strlen(mb_convert_encoding($str, 'ISO-8859-1', 'UTF-8'))) {
      return false;
    }

    return true;
  }
}
