<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_title_section",
 *   label = @Translation(" Mit_Models : Title "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_title_section",
 *   library = "mit_models/mit_models_title_section",
 *   default_region = "title",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description"),
 *     },
 *     "title_section_btn" = {
 *      "label" = @Translation("title_section_btn"),
 *     },
 *   }
 * )
 */

class MitModelsTitleSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_title.png");
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
            'derivate' => [
                'value' => 'select',
                'options' => [
                    'mitor-section-title--bg' => 'before-bg'
                ]
            ],
            'region_tag_title' => 'h1',
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => ' Best Digital Agency Since 1998 Over the internet '
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => ' Descritpion ',
                            'value' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident amet, nam doloremque error sequi quos fugiat unde eligendi aut fugit quibusdam adipisci ipsa magni praesentium accusamus quas laboriosam? At.  '
                        ]
                    ],
                    'title_section_btn' => [
                        'url' => [
                            'label' => 'LIEN',
                            'value' => [
                                'text' => 'Contact us',
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