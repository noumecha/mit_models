<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_mpt_img_teaser",
 *   label = @Translation(" Mit_Models : Mpt Img Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_mpt_img_teaser",
 *   library = "mit_models/mit_models_mpt_img_teaser",
 *   default_region = "mpt_img_element",
 *   regions = {
 *     "mpt_img_element" = {
 *       "label" = @Translation("mpt_img_element"),
 *      },
 *   }
 * )
 */
class MitModelsMptImgTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_mpt_img_teaser.png");
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
                    'mpt_img_element' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-1.jpg"
                                        alt="Tomate à la porte">'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}