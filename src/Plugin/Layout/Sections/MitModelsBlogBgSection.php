<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_blog_bg_section",
 *   label = @Translation(" Mit_Models : Card Section "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_blog_bg_section",
 *   library = "mit_models/mit_models_blog_bg_section",
 *   default_region = "mc_title",
 *   regions = {
 *     "bg_image" = {
 *       "label" = @Translation("bg_image"),
 *     },
 *     "bg_content" = {
 *       "label" = @Translation("bg_content"),
 *     },
 *   }
 * )
 */

class MitModelsBlogBgSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_blog_bg_section.png");
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
                    'bg_image' => [
                        'img_bg' => [
                            'label' => ' Image ',
                        ]
                    ],
                    "bg_content" => [
                        'text_html' => [
                            'label' =>"Content",
                            'value' => '<div class="mitor-card mitor-card--right mitor-card--reverse mitor-card--video row">
                                            <div class="mitor-card__img col-lg-6">
                                                <div class="img-bloc">
                                                    <a href="#">
                                                        <img src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-1/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="mitor-play-btn">
                                                        <div class="mtb-play">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path
                                                                    d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mitor-card__body col-lg-6  ">
                                                <h3 class="mc-title">
                                                    We Ensure the Success of Your Products and Business</h3>
                                                <div class="mc-description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua. Quis ipsum suspe ndisse ultrices gravida. Risus commodo viverra maecenas
                                
                                
                                
                                
                                                    ccumsanamet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore
                                                    magna aliqua. Quis ipsum suspendisse ultrices Letraset sheets containing gravida.
                                
                                                </div>
                                                <a href="#" class="mitor-btn  ">Contact us</a>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="achievments-counter">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path
                                                                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span class="number">40K</span>
                                                                <div class="desc">Total Users</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="achievments-counter">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path
                                                                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span class="number">40K</span>
                                                                <div class="desc">Total Users</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}