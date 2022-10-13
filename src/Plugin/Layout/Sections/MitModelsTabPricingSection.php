<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_tab_pricing_section",
 *   label = @Translation(" Mit_Models : Tab Pricing "),
 *   category = @Translation("mit_moddels"),
 *   path = "layouts/sections",
 *   template = "mit_models_tab_pricing_section",
 *   library = "mit_models/mit_models_tab_pricing_section",
 *   default_region = "tab_pricing_stitle",
 *   regions = {
 *     "tab_pricing_stitle" = {
 *       "label" = @Translation("tab_pricing_stitle"),
 *     },
 *     "tab_pricing_title" = {
 *       "label" = @Translation("tab_pricing_title"),
 *     },
 *     "tab_pricing_description" = {
 *       "label" = @Translation("tab_pricing_description"),
 *     },
 *     "tab_pricing_one" = {
 *       "label" = @Translation("tab_pricing_one"),
 *     },
 *     "tab_pricing_two" = {
 *       "label" = @Translation("tab_pricing_two"),
 *     },
 *     "tab_pricing_slide_one" = {
 *       "label" = @Translation("tab_pricing_slide_one"),
 *     },
 *     "tab_pricing_slide_two" = {
 *       "label" = @Translation("tab_pricing_slide_two"),
 *     },
 *   }
 * )
 */

class MitModelsTabPricingSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_tab_pricing_section.png");
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
                    "tab_pricing_stitle" => [
                        'text_html' => [
                            'label' =>"Small Title",
                            'value' => ''
                        ]
                    ],
                    "tab_pricing_title" => [
                        'text_html' => [
                            'label' =>"title",
                            'value' => ''
                        ]
                    ],
                    "tab_pricing_description" => [
                        'text_html' => [
                            'label' =>"Description",
                            'value' => ''
                        ]
                    ],
                    "tab_pricing_one" => [
                        'text_html' => [
                            'label' =>"Type One",
                            'value' => ''
                        ]
                    ],
                    "tab_pricing_stitle" => [
                        'text_html' => [
                            'label' =>"Content",
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}