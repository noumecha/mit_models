<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_achievement_teaser",
 *   label = @Translation(" Mit_Models : Achieve Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_achievement_teaser",
 *   library = "mit_models/mit_models_achievement_teaser",
 *   default_region = "ach_number",
 *   regions = {
 *     "ach_number" = {
 *       "label" = @Translation("ach_number"),
 *      },
 *     "ach_sub_desc" = {
 *       "label" = @Translation("ach_sub_desc"),
 *     },
 *   }
 * )
 */
class MitModelsAchievementsTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_achievement_teaser.png");
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
                    'ach_number' => [
                        'text_html' => [
                            'label' => 'Number',
                            'value' => '40K'
                        ]
                    ],
                    'ach_sub_desc' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => ' Total Users '
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}