<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_pricing_section",
 *   label = @Translation(" Mit_Models : Pricing Section "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_pricing_section",
 *   library = "mit_models/mit_models_pricing_section",
 *   default_region = "project_content",
 *   regions = {
 *     "project_content" = {
 *       "label" = @Translation("project_content"),
 *     },
 *   }
 * )
 */

class MitModelsPricingSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_pricing_section.png");
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
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    'project_content' => [
                        'text_html' => [
                            'label' => ' Image Project Content ',
                            'value' => '<div class="grid-item  ">
                                            <a href="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-1.jpg" class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-1.jpg"
                                                    alt="Tomate à la porte">
                                            </a>
                                        </div>
                                        <div class="grid-item">
                                            <a href="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-2.jpg" class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-2.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="grid-item  ">
                                            <a
                                            href="https://static6.depositphotos.com/1003369/659/i/600/depositphotos_6591667-stock-photo-close-up-of-beautiful-womanish.jpg"
                                            class="grid-img">
                                                <img src="https://static6.depositphotos.com/1003369/659/i/600/depositphotos_6591667-stock-photo-close-up-of-beautiful-womanish.jpg"
                                                    alt="image">
                                            </a>
                                        </div>
                                        <div class="grid-item  ">
                                            <a href="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-4.jpg" class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-4.jpg"
                                                    alt="Gift me the">
                                            </a>
                                        </div>
                                        <div class="grid-item  ">
                                            <a href="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-5.jpg" class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-5.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="grid-item  ">
                                            <a href="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-1.jpg" class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-1.jpg" alt="image">
                                            </a>
                                        </div>'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}