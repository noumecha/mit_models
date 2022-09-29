<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_overview_section",
 *   label = @Translation(" Mit_Models : Overview Section "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_overview_section",
 *   library = "mit_models/mit_models_overview_section",
 *   default_region = "overview_image",
 *   regions = {
 *     "overview_image" = {
 *       "label" = @Translation("overview_image"),
 *     },
 *     "overview_small_title" = {
 *       "label" = @Translation("overview_small_title"),
 *     },
 *     "overview_large_title" = {
 *       "label" = @Translation("overview_large_title"),
 *     },
 *     "overview_button_video" = {
 *       "label" = @Translation("overview_button_video"),
 *     },
 *   }
 * )
 */

class MitModelsOverViewSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_overview_section.png");
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
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    "overview_image" => [
                        'text_html' => [
                            'label' =>"background Image",
                            'value' => '<img src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/banner.jpg" alt="">'
                        ]
                    ],
                    "overview_small_title" => [
                        'text_html' => [
                            'label' =>"Small Title",
                            'value' => 'Overview'
                        ]
                    ],
                    "overview_large_title" => [
                        'text_html' => [
                            'label' =>"Large Title",
                            'value' => 'We Ensure the Success of Your Products and Business'
                        ]
                    ],
                    "overview_button_video" => [
                        'text_html' => [
                            'label' =>"Video Button",
                            'value' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z" />
                                        </svg>'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}