<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_value_card_teaser",
 *   label = @Translation(" Mit_Models : Value Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_value_card_teaser",
 *   library = "mit_models/mit_models_value_card_teaser",
 *   default_region = "value_card_icon",
 *   regions = {
 *     "value_card_icon" = {
 *       "label" = @Translation("value_card_icon"),
 *     },
 *     "value_card_title" = {
 *       "label" = @Translation("value_card_title")
 *     },
 *     "value_card_description" = {
 *       "label" = @Translation("value_card_description")
 *     },
 *   }
 * )
 */
class MitModelsValueCardTeaser extends FormatageModelsTeasers {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_value_card_teaser.png");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
   */
  public function build(array $regions) {
    // TODO Auto-generated method stub
    $build = parent::build($regions);
    FormatageModelsThemes::formatSettingValues($build);
    return $build;
  }
  /**
   * 
   * {@inheritdoc}
   * 
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
        'load_library' => true,
        'info' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Formulaire de contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'value_card_icon' => [
                    'text_html' => [
                        'title' => 'Card Icon',
                        'value' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>'
                    ]
                ],
                'value_card_title' => [
                    'text_html' => [
                        'title' => 'Card Title',
                        'value' => 'real user data'
                    ]
                ],
                'value_card_description' => [
                    'text_html' => [
                        'title' => 'Card Description',
                        'value' => 'Apparent was a dead black has ceased twinkle'
                    ]
                ]
            ]
        ]
    ];
  }
  
}