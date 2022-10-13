<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_project_gallery_section",
 *   label = @Translation(" Mit_Models : Projects Gallery "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_project_gallery_section",
 *   library = "mit_models/mit_models_project_gallery_section",
 *   default_region = "project_gallery_title",
 *   regions = {
 *     "project_gallery_title" = {
 *       "label" = @Translation("project_gallery_title"),
 *     },
 *     "tab_one" = {
 *       "label" = @Translation("tab_one"),
 *     },
 *     "tab_two" = {
 *       "label" = @Translation("tab_two"),
 *     },
 *     "tab_three" = {
 *       "label" = @Translation("tab_three"),
 *     },
 *     "tab_four" = {
 *       "label" = @Translation("tab_four"),
 *     },
 *     "slider_one" = {
 *       "label" = @Translation("slider_one"),
 *     },
 *     "slider_two" = {
 *       "label" = @Translation("slider_two"),
 *     },
 *     "slider_three" = {
 *       "label" = @Translation("slider_three"),
 *     },
 *     "slider_four" = {
 *       "label" = @Translation("slider_four"),
 *     },
 *   }
 * )
 */

class MitModelsProjectGallerySection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_project_gallery_section.png");
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
                    "project_gallery_title" => [
                        'text_html' => [
                            'label' =>"Title",
                            'value' => 'Our Project Gallery'
                        ]
                    ],
                    "tab_one" => [
                        'text_html' => [
                            'label' =>"Tab Un",
                            'value' => 'Marketing'
                        ]
                    ],
                    "tab_two" => [
                        'text_html' => [
                            'label' =>"Tab Deux",
                            'value' => 'Design'
                        ]
                    ],
                    "tab_three" => [
                        'text_html' => [
                            'label' =>"Tab Trois",
                            'value' => 'Development'
                        ]
                    ],
                    "tab_four" => [
                        'text_html' => [
                            'label' =>"Tab Quatre",
                            'value' => 'Supports'
                        ]
                    ],
                    "slider_one" => [
                        'text_html' => [
                            'label' =>"Slider Un",
                            'value' => '
                                    <div class="swiper project-tabs">
                                        <div class="swiper-wrapper">
                                            <div class="mpt-img ">
                                                <a href="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-1.jpg"
                                                class="grid-img">
                                                    <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-1.jpg"
                                                        alt="Tomate à la porte">
                                                </a>
                                            </div>
                                            <div class="mpt-img">
                                                <a href="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-2.jpg"
                                                class="grid-img">
                                                    <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-2.jpg"
                                                        alt="Tomate à la porte">
                                                </a>
                                            </div>
                                            <div class="mpt-img">
                                                <a
                                                href="https://static6.depositphotos.com/1003369/659/i/600/depositphotos_6591667-stock-photo-close-up-of-beautiful-womanish.jpg"
                                                class="grid-img">
                                                    <img src="https://static6.depositphotos.com/1003369/659/i/600/depositphotos_6591667-stock-photo-close-up-of-beautiful-womanish.jpg"
                                                        alt="image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination carousel-nav carousel-nav--carree carousel-nav--black"></div>
                                    </div>'
                        ]
                    ],
                    "slider_two" => [
                        'text_html' => [
                            'label' =>"Slider Deux",
                            'value' => '
                                    <div class="col-md-4">
                                        <div class="mpt-img mpt-img--active">
                                            <a href="#"
                                            class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-4.jpg"
                                                    alt="Gift me the">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mpt-img">
                                            <a href="#"
                                            class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-2.jpg"
                                                    alt="Tomate à la porte">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mpt-img">
                                            <a
                                            href="#"
                                            class="grid-img">
                                                <img src="https://static6.depositphotos.com/1003369/659/i/600/depositphotos_6591667-stock-photo-close-up-of-beautiful-womanish.jpg"
                                                    alt="image">
                                            </a>
                                        </div>
                                    </div>'
                        ]
                    ],
                    "slider_three" => [
                        'text_html' => [
                            'label' =>"Slider Trois",
                            'value' => '
                                    <div class="col-md-4">
                                        <div class="mpt-img mpt-img--active">
                                            <a
                                            href="#"
                                            class="grid-img">
                                                <img src="https://static6.depositphotos.com/1003369/659/i/600/depositphotos_6591667-stock-photo-close-up-of-beautiful-womanish.jpg"
                                                    alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mpt-img">
                                            <a href="#"
                                            class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-1.jpg"
                                                    alt="Tomate à la porte">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mpt-img">
                                            <a href="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-2.jpg"
                                            class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-2.jpg"
                                                    alt="Tomate à la porte">
                                            </a>
                                        </div>
                                    </div>'
                        ]
                    ],
                    "slider_four" => [
                        'text_html' => [
                            'label' =>"Slider Quatre",
                            'value' => '
                                    <div class="col-md-4">
                                        <div class="mpt-img mpt-img--active">
                                            <a href="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-2.jpg"
                                            class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-5.jpg"
                                                    alt="Tomate à la porte">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mpt-img">
                                            <a href="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-1.jpg"
                                            class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-1.jpg"
                                                    alt="Tomate à la porte">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mpt-img">
                                            <a
                                            href="https://static6.depositphotos.com/1003369/659/i/600/depositphotos_6591667-stock-photo-close-up-of-beautiful-womanish.jpg"
                                            class="grid-img">
                                                <img src="http://slidesigma.com/themes/html/mitor/assets/img/project/h-project-4.jpg"
                                                    alt="image">
                                            </a>
                                        </div>
                                    </div>'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}