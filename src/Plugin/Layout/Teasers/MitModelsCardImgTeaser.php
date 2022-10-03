<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_card_img_teaser",
 *   label = @Translation(" Mit_Models : Card Img Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_card_img_teaser",
 *   library = "mit_models/mit_models_card_img_teaser",
 *   default_region = "card_img_image",
 *   regions = {
 *     "card_img_image" = {
 *       "label" = @Translation("card_img_image"),
 *      },
 *     "card_img_link" = {
 *       "label" = @Translation("card_img_link"),
 *     },
 *   }
 * )
 */
class MitModelsCardImgTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_card_img_teaser.png");
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
                    'card_img_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img src="https://slidesigma.com/themes/html/mitor/assets/img/project/homepage-3-g/h3-p-1.jpg" alt="">'
                        ]
                    ],
                    'card_img_link' => [
                        'url' => [
                            'label' => 'Link',
                            'value' => [
                                'text' => 'Smart office management',
                                'class' => 'content-link',
                                'href' => '#',
                            ]
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}