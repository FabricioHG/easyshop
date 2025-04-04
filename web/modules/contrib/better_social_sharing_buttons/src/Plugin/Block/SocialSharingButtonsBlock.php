<?php

namespace Drupal\better_social_sharing_buttons\Plugin\Block;

use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Controller\TitleResolverInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Routing\RouteObjectInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Provides a social sharing buttons block.
 *
 * @Block(
 *  id = "social_sharing_buttons_block",
 *  admin_label = @Translation("Better Social Sharing Buttons"),
 * )
 */
class SocialSharingButtonsBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * Symfony\Component\HttpFoundation\RequestStack definition.
   */
  protected RequestStack $requestStack;

  /**
   * Drupal\Core\Controller\TitleResolverInterface definition.
   */
  protected TitleResolverInterface $titleResolver;

  /**
   * Default Configuration.
   */
  protected ConfigFactoryInterface $configFactory;

  /**
   * The current route match.
   */
  protected RouteMatchInterface $routeMatch;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = new static($configuration, $plugin_id, $plugin_definition);
    $instance->requestStack = $container->get('request_stack');
    $instance->titleResolver = $container->get('title_resolver');
    $instance->configFactory = $container->get('config.factory');
    $instance->routeMatch = $container->get('current_route_match');
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $config = $this->configFactory->get('better_social_sharing_buttons.settings');
    $form['services'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Select which social sharing buttons you would like to use'),
      '#options' => [
        'facebook' => $this->t('Facebook'),
        'x' => $this->t('X'),
        'whatsapp' => $this->t('WhatsApp'),
        'facebook_messenger' => $this->t('Facebook Messenger'),
        'email' => $this->t('Email'),
        'pinterest' => $this->t('Pinterest'),
        'linkedin' => $this->t('LinkedIn'),
        'xing' => $this->t('Xing'),
        'tumblr' => $this->t('Tumblr'),
        'reddit' => $this->t('Reddit'),
        'truth' => $this->t('Truth Social'),
        'bluesky' => $this->t('Bluesky'),
        'evernote' => $this->t('Evernote'),
        'print' => $this->t('Print'),
        'copy' => $this->t('Copy current page url to clipboard'),
      ],
      '#default_value' => $this->configuration['services'] ?? $config->get('services'),
    ];
    $form['iconset'] = [
      '#type' => 'radios',
      '#title' => $this->t('Which iconset do you want to use?'),
      '#options' => [
        'social-icons--square' => $this->t('Colored square icons (you can adjust the border radius)<br>
        <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455.73 455.73"><path d="M0 0v455.73h242.704V279.691h-59.33v-71.864h59.33v-60.353c0-43.893 35.582-79.475 79.475-79.475h62.025v64.622h-44.382c-13.947 0-25.254 11.307-25.254 25.254v49.953h68.521l-9.47 71.864h-59.051V455.73H455.73V0H0z" fill="#3a559f"/></svg>
        <svg width="40px" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" style="0 0 128 128;"><style type="text/css">.st0{fill:#1D1D1B;}.st1{fill:#FFFFFF;stroke:#FFFFFF;stroke-miterlimit:10;}</style><path class="st0" d="M0,0h128v128H0V0z"/><path id="path1009" class="st1" d="M32.2,32L57,67.3L32,96h5.7l21.7-25.1L76.9,96H96L69.9,58.8L93.2,32h-5.7L67.3,55.2L51.1,32H32.2z M40.2,36.4H49l38.7,55.2h-8.8L40.2,36.4z"/></svg>
        <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path fill="#25D366" d="M0 0h128v128H0z"/><g fill="#FFF"><path d="M28.16 100.013l5.064-18.495a35.622 35.622 0 0 1-4.765-17.842c.008-19.679 16.018-35.689 35.69-35.689 9.548.004 18.51 3.721 25.247 10.468 6.739 6.745 10.448 15.712 10.444 25.25-.008 19.677-16.02 35.689-35.69 35.689 0 0 .001 0 0 0h-.015a35.652 35.652 0 0 1-17.055-4.345l-18.92 4.964zm19.796-11.425l1.084.643a29.622 29.622 0 0 0 15.098 4.135h.012c16.35 0 29.658-13.307 29.664-29.665.003-7.926-3.08-15.379-8.68-20.986-5.6-5.607-13.049-8.696-20.972-8.7-16.363 0-29.67 13.307-29.677 29.663a29.583 29.583 0 0 0 4.535 15.786l.706 1.123-2.996 10.946 11.226-2.945z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M82.13 72.19c-.223-.372-.816-.594-1.708-1.042-.893-.446-5.277-2.603-6.094-2.9-.817-.298-1.412-.447-2.007.445-.594.894-2.303 2.903-2.823 3.497-.52.595-1.041.67-1.933.224-.891-.446-3.764-1.389-7.17-4.427-2.652-2.364-4.442-5.285-4.961-6.177-.52-.893-.056-1.375.39-1.82.402-.4.892-1.042 1.338-1.562.445-.52.594-.894.892-1.489.297-.594.148-1.116-.075-1.562-.223-.446-2.006-4.836-2.75-6.621-.723-1.738-1.459-1.503-2.005-1.531a36.387 36.387 0 0 0-1.71-.032c-.594 0-1.56.224-2.378 1.117-.818.892-3.121 3.05-3.121 7.439 0 4.39 3.195 8.63 3.641 9.225.446.595 6.288 9.603 15.235 13.465a51.182 51.182 0 0 0 5.084 1.88c2.135.678 4.08.582 5.616.353 1.714-.257 5.276-2.157 6.02-4.24.742-2.084.742-3.87.52-4.242z"/></g></svg>
        <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path fill="#0084FF" d="M0 0h128v128H0z"/><path d="M64 17.531c-25.405 0-46 19.259-46 43.015 0 13.515 6.665 25.574 17.089 33.46v16.462l15.698-8.707a49 49 0 0 0 13.213 1.8c25.405 0 46-19.258 46-43.015 0-23.756-20.595-43.015-46-43.015zm4.845 57.683L56.947 62.855 34.035 75.524l25.12-26.657 11.898 12.359 22.91-12.67-25.118 26.658z" fill="#FFF"/></svg>
        <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><g fill="none" fill-rule="evenodd"><path fill="#f60" stroke-width=".994" d="M0 0h60v60H0z"/><path d="M30 32.885l17.308-15H12.692zm-4.675-1.66L30 35.06l4.602-3.837 12.706 10.891H12.692zm-13.787 9.737V19.038L24.231 30zm36.924 0V19.038L35.769 30z" fill="#fff"/></g></svg>
        ...
        '),
        'social-icons--no-color' => $this->t('Icons without color or background (you can use svg fill property in css to alter the icon color)<br/>
        <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455.73 455.73"><path d="M186.78 421.73V245.693h-59.33v-71.864h59.33v-60.353C186.78 69.582 222.362 34 266.255 34h62.025v64.622h-44.382c-13.947 0-25.254 11.307-25.254 25.254v49.953h68.521l-9.47 71.864h-59.051V421.73z"/></svg>
        <svg width="40px" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" style="0 0 128 128;"><path id="path1009" class="st0" d="M0.5,0l49.5,70.6L0,128h11.4l43.4-50.2L89.8,128H128L75.9,53.5L122.3,0H111L70.7,46.3L38.2,0H0.5z M16.5,8.8h17.5l77.4,110.3H93.9L16.5,8.8z"/></svg>
        <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M28.16 100.013l5.064-18.495a35.622 35.622 0 0 1-4.765-17.842c.008-19.679 16.018-35.689 35.69-35.689 9.548.004 18.51 3.721 25.247 10.468 6.739 6.745 10.448 15.712 10.444 25.25-.008 19.677-16.02 35.689-35.69 35.689 0 0 .001 0 0 0h-.015a35.652 35.652 0 0 1-17.055-4.345l-18.92 4.964zm19.796-11.425l1.084.643a29.622 29.622 0 0 0 15.098 4.135h.012c16.35 0 29.658-13.307 29.664-29.665.003-7.926-3.08-15.379-8.68-20.986-5.6-5.607-13.049-8.696-20.972-8.7-16.363 0-29.67 13.307-29.677 29.663a29.583 29.583 0 0 0 4.535 15.786l.706 1.123-2.996 10.946 11.226-2.945z"/><path d="M82.13 72.19c-.223-.372-.816-.594-1.708-1.042-.893-.446-5.277-2.603-6.094-2.9-.817-.298-1.412-.447-2.007.445-.594.894-2.303 2.903-2.823 3.497-.52.595-1.041.67-1.933.224-.891-.446-3.764-1.389-7.17-4.427-2.652-2.364-4.442-5.285-4.961-6.177-.52-.893-.056-1.375.39-1.82.402-.4.892-1.042 1.338-1.562.445-.52.594-.894.892-1.489.297-.594.148-1.116-.075-1.562-.223-.446-2.006-4.836-2.75-6.621-.723-1.738-1.459-1.503-2.005-1.531a36.387 36.387 0 0 0-1.71-.032c-.594 0-1.56.224-2.378 1.117-.818.892-3.121 3.05-3.121 7.439 0 4.39 3.195 8.63 3.641 9.225.446.595 6.288 9.603 15.235 13.465a51.182 51.182 0 0 0 5.084 1.88c2.135.678 4.08.582 5.616.353 1.714-.257 5.276-2.157 6.02-4.24.742-2.084.742-3.87.52-4.242z" clip-rule="evenodd" fill-rule="evenodd"/></svg>
        <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M64 17.531c-25.405 0-46 19.259-46 43.015 0 13.515 6.665 25.574 17.089 33.46v16.462l15.698-8.707a49 49 0 0 0 13.213 1.8c25.405 0 46-19.258 46-43.015 0-23.756-20.595-43.015-46-43.015zm4.845 57.683L56.947 62.855 34.035 75.524l25.12-26.657 11.898 12.359 22.91-12.67-25.118 26.658z"/></svg>
        <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><path d="M30 32.885l17.308-15H12.692zm-4.675-1.66L30 35.06l4.602-3.837 12.706 10.891H12.692zm-13.787 9.737V19.038L24.231 30zm36.924 0V19.038L35.769 30z"/></svg>
        ...
        '),
      ],
      '#default_value' => $this->configuration['iconset'] ?? $config->get('iconset'),
    ];
    $form['facebook_app_id'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Facebook App ID'),
      '#description' => $this->t('If you want to share to FB messenger, a Facebook App ID is required'),
      '#states'        => [
        'visible'      => [
          ':input[name="settings[services][facebook_messenger]"]' => ['checked' => TRUE],
        ],
        'required' => [
          ':input[name="settings[services][facebook_messenger]"]' => ['checked' => TRUE],
        ],
      ],
      '#default_value' => $this->configuration['facebook_app_id'] ?? $config->get('facebook_app_id'),
      '#maxlength' => 64,
      '#size' => 64,
    ];
    $form['print_css'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Print css file'),
      '#default_value' => $this->configuration['print_css'] ?? $config->get('print_css'),
      '#description' => $this->t('Enter absolute path to your print css file. When set, the print version will display on screen.'),
      '#states'        => [
        'visible'      => [
          ':input[name="settings[services][print]"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['width'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Icon size'),
      '#description' => $this->t('Set the width of the icons in pixels, e.g., 32px. Height and width will be set to this size.'),
      '#default_value' => $this->configuration['width'] ?? $config->get('width'),
      '#maxlength' => 64,
      '#size' => 64,
      '#required' => TRUE,
    ];
    $form['radius'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Border radius'),
      '#description' => $this->t('Set the border radius of each icon (=rounded corners). Set to 0px to have square icons or 100% to convert the square icons into circular icons'),
      '#default_value' => $this->configuration['radius'] ?? $config->get('radius'),
      '#maxlength' => 64,
      '#size' => 64,
      '#required' => TRUE,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['services'] = array_filter($form_state->getValue('services'));
    $this->configuration['iconset'] = $form_state->getValue('iconset');
    $this->configuration['facebook_app_id'] = $form_state->getValue('facebook_app_id');
    $this->configuration['print_css'] = $form_state->getValue('print_css');
    $this->configuration['width'] = $form_state->getValue('width');
    $this->configuration['radius'] = $form_state->getValue('radius');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $items = [];
    global $base_url;
    $config = $this->configFactory->get('better_social_sharing_buttons.settings');
    $request = $this->requestStack->getCurrentRequest();
    if ($route = $request->attributes->get(RouteObjectInterface::ROUTE_OBJECT)) {
      $title = $this->titleResolver->getTitle($request, $route);
    }
    if (isset($title) && is_array($title) && !empty($title['#markup'])) {
      $title = $title['#markup'];
    }
    if (($this->routeMatch->getRouteName() == "entity.user.canonical"
    || $this->routeMatch->getRouteName() == "entity.taxonomy_term.canonical")
    && isset($title['#markup'])) {
      $title = $title['#markup'];
    }

    $items['page_url'] = Url::fromRoute('<current>', [], ['absolute' => TRUE]);
    $items['description'] = '';
    $items['title'] = !empty($title) ? UrlHelper::encodePath($title) : '';
    $items['width'] = $this->configuration['width'] ?? $config->get('width');
    $items['radius'] = $this->configuration['radius'] ?? $config->get('radius');
    $items['facebook_app_id'] = $this->configuration['facebook_app_id'] ?? $config->get('facebook_app_id');
    $items['print_css'] = $this->configuration['print_css'] ?? $config->get('print_css');
    $items['iconset'] = $this->configuration['iconset'] ?? $config->get('iconset');
    $items['services'] = $this->configuration['services'] ?? $config->get('services');
    $items['base_url'] = $base_url;
    return [
      '#theme' => 'better_social_sharing_buttons',
      '#items' => $items,
    ];
  }

}
