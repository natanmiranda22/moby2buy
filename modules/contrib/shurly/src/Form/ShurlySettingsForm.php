<?php

namespace Drupal\shurly\Form;

use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfigFormBase;

/**
 * ShurlySettingsForm.
 */
class ShurlySettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function __construct(ConfigFactoryInterface $config_factory) {
    parent::__construct($config_factory);
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'shurly.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'shurly_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('shurly.settings');

    $form['shurly_url'] = [
      '#type' => 'fieldset',
      '#title' => t('Base URL'),
      '#description' => t('If you want to use a dedicated url for the short URL\'s, enter above that short base URL to be used.'),
    ];

    $form['shurly_url']['shurly_base'] = [
      '#type' => 'textfield',
      '#description' => t('Leave empty to use the default base URL of the Drupal installation'),
      '#default_value' => $config->get('shurly_base'),
      '#required' => FALSE,
    ];

    $form['shurly_redirect'] = [
      '#type' => 'fieldset',
      '#title' => t('Redirect URL'),
      '#description' => t('Define the redirect page when the short link is deactivated.'),
    ];

    $form['shurly_redirect']['shurly_redirect_page'] = [
      '#type' => 'textfield',
      '#field_prefix' => _shurly_get_shurly_base() . '/',
      '#description' => t('Page displayed when the link is deactivated. If not defined, the default 404 page will be used.'),
      '#default_value' => $config->get('shurly_redirect_page'),
    ];

    $form['shurly_restrictions'] = [
      '#type' => 'fieldset',
      '#title' => t('Restrictions'),
      '#description' => t('Restrict short URL targets. Be aware of the fact, that the localhost, local network and unresolvable restriction are resolving the given address by staging a DNS request, which can significantly <strong>slow down the short URL creation</strong>!'),
    ];

    $form['shurly_restrictions']['shurly_forbid_localhost'] = [
      '#type' => 'checkbox',
      '#title' => t('Forbid localhost'),
      '#description' => t('Do not allow creation of short URLs targeting localhost addresses.'),
      '#default_value' => $config->get('shurly_forbid_localhost'),
    ];

    $form['shurly_restrictions']['shurly_forbid_private_ips'] = [
      '#type' => 'checkbox',
      '#title' => t('Forbid private IP ranges'),
      '#description' => t('Do not allow creation of short URLs targeting private IP ranges.'),
      '#default_value' => $config->get('shurly_forbid_private_ips'),
    ];

    $form['shurly_restrictions']['shurly_forbid_unresolvable_hosts'] = [
      '#type' => 'checkbox',
      '#title' => t('Forbid unresolvable hostnames'),
      '#description' => t('Do not allow creation of short URLs targeting host addresses that cannot be resolved.'),
      '#default_value' => $config->get('shurly_forbid_unresolvable_hosts'),
    ];

    $form['shurly_restrictions']['shurly_forbid_ips'] = [
      '#type' => 'checkbox',
      '#title' => t('Forbid direct IP redirects'),
      '#description' => t('Do not allow creation of short URLs containing an IP address instead of a human readable hostname.'),
      '#default_value' => $config->get('shurly_forbid_ips'),
    ];

    $form['shurly_restrictions']['shurly_forbid_custom'] = [
      '#type' => 'checkbox',
      '#title' => t('Forbid URL target by custom pattern'),
      '#description' => t('Define a custom pattern (RegEx) to forbid some kind of target URLs.'),
      '#default_value' => $config->get('shurly_forbid_custom'),
      '#attributes' => [
        'onchange' => "jQuery('#shurly_custom_restriction_container').toggle();",
      ],
    ];

    $form['shurly_restrictions']['shurly_custom_restriction'] = [
      '#type' => 'textfield',
      '#title' => t('Custom pattern'),
      '#description' => t('PERL regular expression defining a forbidden URL pattern.'),
      '#default_value' => $config->get('shurly_custom_restriction'),
    ];

    $form['shurly_restrictions']['shurly_gsb'] = [
      '#type' => 'checkbox',
      '#title' => t('Google Safe Browsing'),
      '#description' => t('Check if a long URL is blacklisted against Google Safe Browsing. This service
        requires a Google developer account and is limited to 10,000 queries per day.'),
      '#default_value' => $config->get('shurly_gsb'),
      '#attributes' => [
        'onchange' => "jQuery('.shurly_gsb_container').toggle();",
      ],
    ];

    $form['shurly_restrictions']['shurly_gsb_client'] = [
      '#type' => 'textfield',
      '#title' => t('Client'),
      '#description' => t('You can choose any name. Google suggests that you choose a name that represents the true identiy
         of the client (ie: name of your company).'),
      '#default_value' => $config->get('shurly_gsb_client'),
    ];

    $form['shurly_restrictions']['shurly_gsb_apikey'] = [
      '#type' => 'textfield',
      '#title' => t('API Key'),
      '#description' => t('Add your API key.'),
      '#default_value' => $config->get('shurly_gsb_apikey'),
    ];

    $form['shurly_throttle'] = [
      '#type' => 'fieldset',
      '#title' => t('Rate limiting'),
      '#tree' => TRUE,
      '#description' => t('Limit requests by IP address. Leave blank for no rate limiting.<br /><strong>Note:</strong> Only roles with the \'Create short URLs\' permission are listed here.'),
    ];

    $saved = $config->get('shurly_throttle');

    /**
     * @var string $rid
     * @var \Drupal\user\Entity\Role $role
     */
    foreach (user_roles(FALSE, 'Create short URLs') as $rid => $role) {
      $rate = isset($saved[$rid]['rate']) ? $saved[$rid]['rate'] : NULL;
      $time = isset($saved[$rid]['time']) ? $saved[$rid]['time'] : NULL;

      $form['shurly_throttle'][$rid] = [
        '#type' => 'fieldset',
        '#title' => $role->label(),
        '#tree' => TRUE,
      ];
      $form['shurly_throttle'][$rid]['rate'] = [
        '#type' => 'textfield',
        '#size' => '3',
        '#prefix' => '<div class="container-inline">',
        '#field_suffix' => ' ' . t('requests'),
        '#default_value' => $rate,
      ];
      $form['shurly_throttle'][$rid]['time'] = [
        '#type' => 'textfield',
        '#size' => '3',
        '#field_prefix' => t('within'),
        '#field_suffix' => ' ' . t('minutes'),
        '#default_value' => $time,
        '#suffix' => '</div>',
      ];
      $form['shurly_throttle'][$rid]['weight'] = [
        '#type' => 'weight',
        '#title' => t('Weight'),
        '#default_value' => isset($saved[$rid]['weight']) ? $saved[$rid]['weight'] : 0,
        '#description' => t('Order of this role when considering a user with multiple roles. A user\'s lightest role will take precedence.'),
      ];

    }

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $custom_base_url = trim($form_state->getValue('shurly_base'));
    // We need to deal with an empty value here. But then wie don't need to validate the url.
    if (!empty($custom_base_url) && !UrlHelper::isValid($custom_base_url, $absolute = TRUE)) {
      $form_state->setErrorByName('shurly_base', t('The base URL is not valid.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('shurly.settings');
    $form_state->cleanValues();

    foreach ($form_state->getValues() as $key => $value) {
      if (!empty($value) && !is_array($value)) {
        $config->set($key, $value);
      }
    }

    $config->save();

    parent::submitForm($form, $form_state);
  }

}
