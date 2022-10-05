<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_circle_wrap_teaser",
 *   label = @Translation(" Mit_Models : Circle Wrap Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_circle_wrap_teaser",
 *   library = "mit_models/mit_models_circle_wrap_teaser",
 *   default_region = "circle_wrap_svg",
 *   regions = {
 *     "circle_wrap_svg" = {
 *       "label" = @Translation("circle_wrap_svg"),
 *      },
 *     "circle_wrap_number" = {
 *       "label" = @Translation("circle_wrap_number"),
 *     },
 *     "circle_wrap_title" = {
 *       "label" = @Translation("circle_wrap_title"),
 *     },
 *   }
 * )
 */
class MitModelsCircleWrapTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_circle_wrap_teaser.png");
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
    function defaultConfiguration() {
        return [
            'load_library' => true,
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Formulaire de contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'circle_wrap_svg' => [
                        'text_html' => [
                            'label' => 'Image or SVG',
                            'value' => '<svg class="progress-circle" width="200px" height="200px" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="progress-circle-back" cx="80" cy="80" r="74"></circle>
                                            <circle class="progress-circle-prog prog-2 fill-mode" cx="80" cy="80" r="74"></circle>
                                        </svg>'
                        ]
                    ],
                    'circle_wrap_number' => [
                        'text_html' => [
                            'label' => 'Number',
                            'value' => '26'
                        ]
                    ],
                    'circle_wrap_title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => 'days'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}