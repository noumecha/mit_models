<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A mitor hero section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_mitor_hero_section",
 *   label = @Translation(" Mit_Models : Title "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_mitor_hero_section",
 *   library = "mit_models/mit_models_mitor_hero_section",
 *   default_region = "m_hero_title",
 *   regions = {
 *     "m_hero_title" = {
 *       "label" = @Translation("m_hero_title"),
 *     },
 *     "m_hero_description" = {
 *       "label" = @Translation("m_hero_description"),
 *     },
 *     "m_hero_btn" = {
 *       "label" = @Translation("m_hero_btn"),
 *     },
 *     "m_hero_image" = {
 *       "label" = @Translation("m_hero_image"),
 *     }
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_mitor_hero_section.png");
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
            'region_tag_title' => 'h1',
            "derivate" => [
                'value' => 'right',
                'options' => [
                  'mitor-card--right' => 'right',
                  'mitor-card--reverse' => 'reverse',
                ]
              ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    'm_hero_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'We Ensure the Success of Your Products and Business'
                        ]
                    ],
                    'm_hero_description' => [
                        'text_html' => [
                            'label' => ' Descritpion ',
                            'value' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Quis ipsum suspe ndisse ultrices gravida. Risus commodo viverra maecenas '
                        ]
                    ],
                    'm_hero_image' => [
                        'text_html' => [
                            'label' => ' Image ',
                            'value' => ' <a href="#">
                                            <img src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-1/banner.png" alt="">
                                        </a>'
                        ]
                    ],
                    'm_hero_btn' => [
                        'url' => [
                            'label' => ' Button ',
                            'value' => [
                                'link' => '#',
                                'text' => 'Contact Us',
                                'class' => 'mitor-btn',
                            ]
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}