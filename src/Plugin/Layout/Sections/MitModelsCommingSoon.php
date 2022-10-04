<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_comming_soon",
 *   label = @Translation(" Mit_Models : Comming Soon "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_comming_soon",
 *   library = "mit_models/mit_models_comming_soon",
 *   default_region = "comming_soon_image",
 *   regions = {
 *     "comming_soon_image" = {
 *       "label" = @Translation("comming_soon_image"),
 *     },
 *     "comming_soon_bg" = {
 *       "label" = @Translation("comming_soon_bg"),
 *     },
 *     "comming_soon_title" = {
 *       "label" = @Translation("comming_soon_title"),
 *     },
 *     "comming_soon_description" = {
 *       "label" = @Translation("comming_soon_description"),
 *     },
 *     "comming_soon_teasers" = {
 *      "label" = @Translation("comming_soon_teasers"),
 *     },
 *     "comming_soon_socials" = {
 *      "label" = @Translation("comming_soon_socials"),
 *     },
 *   }
 * )
 */

class MitModelsCommingSoon extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_comming_soon.png");
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
            'region_tag_mc_title' => 'h3',
            'derivate' => [
                'value' => 'select',
                'options' => [
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
                    'comming_soon_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<a href="#">
                                            <img src="http://slidesigma.com/themes/html/mitor/assets/img/logo.png" alt="">
                                        </a>'
                        ]
                    ],
                    'comming_soon_bg' => [
                        'text_html' => [
                            'label' => 'Background Image',
                            'value' => ''
                        ]
                    ],
                    'comming_soon_title' => [
                        'text_html' => [
                            'label' => ' Title ',
                            'value' => ' We are coming soon... '
                        ]
                    ],
                    'comming_soon_description' => [
                        'text_html' => [
                            'label' => ' Description ',
                            'value' => 'Our exciting new website is coming soon, stay tuned'
                        ]
                    ],
                    "comming_soon_teasers" => [
                        'text_html' => [
                            'label' =>"Teaser elements",
                            'value' => '<div class="col-lg-3 col-sm-6">
                                    <div class="circle-wrap">
                                        <div class="progress-circles">
                                            <svg class="progress-circle" width="200px" height="200px" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="progress-circle-back" cx="80" cy="80" r="74"></circle>
                                                <circle class="progress-circle-prog prog-2 fill-mode" cx="80" cy="80" r="74"></circle>
                                                </svg>
                                            <p class="progress-value">
                                                26
                                            </p>
                                        </div>
                                        <p>days</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="circle-wrap">
                                        <div class="progress-circles">
                                            <svg class="progress-circle" width="200px" height="200px" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="progress-circle-back" cx="80" cy="80" r="74"></circle>
                                                <circle class="progress-circle-prog prog-2 fill-mode" cx="80" cy="80" r="74"></circle>
                                                </svg>
                                            <p class="count-value progress-value" data-target="58">
                                                26
                                            </p>
                                        </div>
                                        <p>days</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="circle-wrap">
                                        <div class="progress-circles ">
                                            <svg class="progress-circle" width="200px" height="200px" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="progress-circle-back" cx="80" cy="80" r="74"></circle>
                                                <circle class="progress-circle-prog prog-2 fill-mode" cx="80" cy="80" r="74"></circle>
                                                </svg>
                                            <p class="count-value progress-value" data-target="15">
                                                15
                                            </p>
                                            
                                        </div>
                                        <p>hours</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="circle-wrap">
                                        <div class=" last">
                                            <svg class="progress-circle" width="200px" height="200px" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="progress-circle-back" cx="80" cy="80" r="74"></circle>
                                                <circle class="progress-circle-prog prog-2 fill-mode" cx="80" cy="80" r="74"></circle>
                                                </svg>
                                            <p class="count-value progress-value" data-target="58">
                                                58
                                            </p>
                                        </div>
                                        <p>minutes</p>
                                    </div>
                                </div>'
                        ]
                    ],
                    'comming_soon_socials' => [
                        'text_html' => [
                            'label' => 'Socials links',
                            'value' => '<ul class="link-list">
                                            <li class="element">
                                                <a href="#" class="link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50"><path fill="currentColor" d="M26 20v-3c0-1.3.3-2 2.4-2H31v-5h-4c-5 0-7 3.3-7 7v3h-4v5h4v15h6V25h4.4l.6-5h-5z"/></svg>
                                                </a>
                                            </li>
                                            <li class="element">
                                                <a href="#" class="link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 100 100"><path fill="currentColor" d="M88.5 26.12a31.562 31.562 0 0 1-9.073 2.486a15.841 15.841 0 0 0 6.945-8.738A31.583 31.583 0 0 1 76.341 23.7a15.783 15.783 0 0 0-11.531-4.988c-8.724 0-15.798 7.072-15.798 15.798c0 1.237.14 2.444.41 3.601c-13.13-.659-24.77-6.949-32.562-16.508a15.73 15.73 0 0 0-2.139 7.943a15.791 15.791 0 0 0 7.028 13.149a15.762 15.762 0 0 1-7.155-1.976c-.002.066-.002.131-.002.199c0 7.652 5.445 14.037 12.671 15.49a15.892 15.892 0 0 1-7.134.27c2.01 6.275 7.844 10.844 14.757 10.972a31.704 31.704 0 0 1-19.62 6.763c-1.275 0-2.532-.074-3.769-.221a44.715 44.715 0 0 0 24.216 7.096c29.058 0 44.948-24.071 44.948-44.945c0-.684-.016-1.367-.046-2.046A32.03 32.03 0 0 0 88.5 26.12z"/></svg>
                                                </a>
                                            </li>
                                            <li class="element">
                                                <a href="#" class="link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M16.094 4C11.017 4 6 7.383 6 12.861c0 3.483 1.958 5.463 3.146 5.463c.49 0 .774-1.366.774-1.752c0-.46-1.174-1.44-1.174-3.355c0-3.978 3.028-6.797 6.947-6.797c3.37 0 5.864 1.914 5.864 5.432c0 2.627-1.055 7.554-4.47 7.554c-1.231 0-2.284-.89-2.284-2.166c0-1.87 1.197-3.681 1.197-5.611c0-3.276-4.537-2.682-4.537 1.277c0 .831.104 1.751.475 2.508C11.255 18.354 10 23.037 10 26.066c0 .935.134 1.855.223 2.791c.168.188.084.169.341.075c2.494-3.414 2.263-4.388 3.391-8.856c.61 1.158 2.183 1.781 3.43 1.781c5.255 0 7.615-5.12 7.615-9.738C25 7.206 20.755 4 16.094 4z"/></svg>
                                                </a>
                                            </li>
                                            <li class="element">
                                                <a href="#" class="link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50"><path fill="currentColor" d="M26 20v-3c0-1.3.3-2 2.4-2H31v-5h-4c-5 0-7 3.3-7 7v3h-4v5h4v15h6V25h4.4l.6-5h-5z"/></svg>
                                                </a>
                                            </li>
                                        </ul>'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}