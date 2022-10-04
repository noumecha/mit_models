<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_circle_teaser",
 *   label = @Translation(" Mit_Models : Circle Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_circle_teaser",
 *   library = "mit_models/mit_models_circle_teaser",
 *   default_region = "circle_image_one",
 *   regions = {
 *     "circle_image_one" = {
 *       "label" = @Translation("circle_image_one"),
 *      },
 *     "circle_image_two" = {
 *       "label" = @Translation("circle_image_two"),
 *     },
 *   }
 * )
 */
class MitModelsCircleTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_circle_teaser.png");
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
                    'circle_image_one' => [
                        'text_html' => [
                            'label' => 'Image 1',
                            'value' => '<a href="#">
                                            <img src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/mob-1.jpg"
                                                alt="">
                                        </a>'
                        ]
                    ],
                    'circle_image_two' => [
                        'text_html' => [
                            'label' => 'Image 2',
                            'value' => '<a href="#">
                                            <img src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/mob-2.jpg"
                                                alt="">
                                        </a>'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}