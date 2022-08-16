<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A mitor hero section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_hero_variant",
 *   label = @Translation(" Mit_Models : Hero Variant "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_hero_variant",
 *   library = "mit_models/mit_models_hero_variant",
 *   default_region = "hero_variant_title",
 *   regions = {
 *     "hero_variant_title" = {
 *       "label" = @Translation("hero_variant_title"),
 *     },
 *     "hero_variant_desc" = {
 *       "label" = @Translation("hero_variant_desc"),
 *     },
 *     "hero_variant_btn" = {
 *       "label" = @Translation("hero_variant_btn"),
 *     },
 *     "hero_variant_image" = {
 *       "label" = @Translation("hero_variant_image"),
 *     },
 *   }
 * )
 */

class MitModelsMitorHeroVariant extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_hero_variant.png");
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
                'value' => '',
                'options' => [
                    'mitor-hero-2--curve' => 'curve',
                    'mitor-hero-2--triangle-asym' => 'triangle-asym',
                    'mitor-hero-2--triangle' => 'triangle',
                    'mitor-hero-2--curve-asym' => 'curve-asym',
                    'mitor-hero-2--split' => 'split',
                    'mitor-hero-2--fan-opacity' => 'fan-opacity',
                    'mitor-hero-2--wave' => 'wave',
                    'mitor-hero-2--mountain' => 'mountain',
                    'mitor-hero-2--book' => 'book',
                    'mitor-hero-2--pyramid' => 'pyramid',
                    'mitor-hero-2--ocean' => 'ocean',
                    'mitor-hero-2--titi' => 'titi'
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
                    'hero_variant_title' => [
                        'text_html' => [
                            'label' => 'Contenu',
                            'value' => 'We Ensure the Success of Your Products and Business'
                        ]
                    ],
                    'hero_variant_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => ' <img src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/banner.jpg" alt="">'
                        ]
                    ],
                    'hero_variant_desc' => [
                        'text_html' => [
                            'label' => 'Contenu',
                            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore
                                        et dolore magna aliqua. Quis ipsum suspe ndisse ultrices gravida. Risus commodo viverra maecenas'
                        ]
                    ],
                    'hero_variant_btn' => [
                        'url' => [
                            'label' => 'Lien',
                            'value' => [
                                'text' => 'Get Started',
                                'link' => '#',
                                'class' => 'mitor-btn'
                            ]
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}