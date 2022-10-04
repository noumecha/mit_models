<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A mitor contact hero section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_contact_hero",
 *   label = @Translation(" Mit_Models : Contact Hero "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_contact_hero",
 *   library = "mit_models/mit_models_contact_hero",
 *   default_region = "contact_hero_title",
 *   regions = {
 *     "contact_hero_title" = {
 *       "label" = @Translation("contact_hero_title"),
 *     },
 *     "contact_hero_image" = {
 *       "label" = @Translation("contact_hero_image"),
 *     },
 *     "contact_hero_proute" = {
 *       "label" = @Translation("contact_hero_proute"),
 *     },
 *     "contact_hero_croute" = {
 *       "label" = @Translation("contact_hero_croute"),
 *     },
 *   }
 * )
 */

class MitModelsContactHero extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_contact_hero.png");
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
            'load_libray' => true,
            'region_tag_contact_hero_title' => 'h1',
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    'contact_hero_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'contact'
                        ]
                    ],
                    'contact_hero_image' => [
                        'img_bg' => [
                            'label' => 'Image',
                            ]
                    ],
                    'contact_hero_proute' => [
                        'text_html' => [
                            'label' => 'Parent Route',
                            'value' => 'home'
                        ]
                    ],
                    'contact_hero_croute' => [
                        'text_html' => [
                            'label' => 'Parent Route',
                            'value' => 'contact'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}