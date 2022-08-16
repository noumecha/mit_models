<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_hero_teaser",
 *   label = @Translation(" Mit_Models : Hero Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_hero_teaser",
 *   library = "mit_models/mit_models_hero_teaser",
 *   default_region = "teaser_title",
 *   regions = {
 *     "teaser_title" = {
 *       "label" = @Translation("teaser_title"),
 *     },
 *     "teaser_svg" = {
 *       "label" = @Translation("teaser_svg"),
 *      },
 *     "teaser_description" = {
 *       "label" = @Translation("teaser_description")
 *     },
 *     "teaser_link" = {
 *       "label" = @Translation("teaser_link")
 *     },
 *     "teaser_image" = {
 *       "label" = @Translation("teaser_image")
 *     },
 *   }
 * )
 */
class MitModelsHeroTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_hero_teaser.png");
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
            "derivate" => [
                'value' => 'default',
                'options' => [
                    'mitor-hero--un' => 'un'
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Formulaire de contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_title' => [
                        'text_html' => [
                            'label' => 'Titre teaser',
                            'value' => 'Marketing machuntruc'
                        ]
                    ],
                    'teaser_svg' => [
                        'text_html' => [
                            'label' => 'Small titre teaser',
                            'value' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                                            <polygon fill="white" points="0,100 100,0 100,100"></polygon>
                                        </svg>'
                        ]
                    ],
                    'teaser_description' => [
                        'text_html' => [
                            'label' => 'teaser description',
                            'value' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni temporibus saepe consectetur
                            ullam atque molestias! obcaecati'
                        ]
                    ],
                    'teaser_image' => [
                        'text_html' => [
                            'label' => 'teaser Image',
                            'value' => '<a href="#">
                                            <img src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-1/banner.png" alt="">
                                        </a>'
                        ]
                    ],
                    'teaser_link' => [
                        'url' => [
                            'label' =>  'Link',
                            'value' =>  [
                                'text' => 'Contact-Us',
                                'link' => '#',
                                'class' => 'mitor-btn'
                            ]
                        ]
                    ]   
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}