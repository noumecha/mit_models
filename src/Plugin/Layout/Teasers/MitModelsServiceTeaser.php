<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_service_teaser",
 *   label = @Translation(" Mit_Models : Service Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_service_teaser",
 *   library = "mit_models/mit_models_service_teaser",
 *   default_region = "service_title",
 *   regions = {
 *     "service_title" = {
 *       "label" = @Translation("service_title"),
 *     },
 *     "service_description" = {
 *       "label" = @Translation("service_description")
 *     },
 *     "service_link" = {
 *       "label" = @Translation("service_link")
 *     },
 *     "service_icon" = {
 *       "label" = @Translation("service_icon")
 *     },
 *   }
 * )
 */
class MitModelsServiceTeaser extends FormatageModelsTeasers {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_service_teaser.png");
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
                'service_title' => [
                    'text_html' => [
                        'title' => 'Titre service',
                        'value' => 'Mqrketing mqchuntruc'
                    ]
                ],
                'service_description' => [
                    'text_html' => [
                        'title' => 'Service description',
                        'value' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni temporibus saepe consectetur
                        ullam atque molestias! obcaecati'
                    ]
                ],
                'sservice_icon' => [
                    'text_html' => [
                        'title' => 'Service Icon',
                        'value' => '<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="35" height="35"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                        <path fill="currentColor"
                                            d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013a74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036c2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975l1.609 3.037l.01.024h.548l-.002-.014l-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                                    </svg>'
                    ]
                ],
                'service_link' => [
                    'url' => [
                        'title' =>  'Link',
                        'value' =>  [
                            'text' => 'Learn More',
                            'link' => '#',
                            'class' => 'link'
                        ]
                    ]
                ]
            ]
        ]
    ];
  }
  
}