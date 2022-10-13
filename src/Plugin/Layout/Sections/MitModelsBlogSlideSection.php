<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_blog_slide_section",
 *   label = @Translation(" Mit_Models : Blog Slide Section "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_blog_slide_section",
 *   library = "mit_models/mit_models_blog_slide_section",
 *   default_region = "blog_slide_stitle",
 *   regions = {
 *     "blog_slide_stitle" = {
 *       "label" = @Translation("blog_slide_stitle"),
 *     },
 *     "blog_slide_title" = {
 *       "label" = @Translation("blog_slide_title"),
 *     },
 *     "blog_slide_description" = {
 *       "label" = @Translation("blog_slide_description"),
 *     },
 *     "blog_slide_link" = {
 *       "label" = @Translation("blog_slide_link"),
 *     },
 *     "blog_slide_container" = {
 *       "label" = @Translation("blog_slide_container"),
 *     },
 *   }
 * )
 */

class MitModelsBlogSlideSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_blog_slide_section.png");
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
            'region_tag_service_small_title' => 'h6',
            'region_tag_service_title' => 'h3',
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    "blog_slide_stitle" => [
                        'text_html' => [
                            'label' =>"Small Title",
                            'value' => 'Our Values and Goals'
                        ]
                    ],
                    "blog_slide_title" => [
                        'text_html' => [
                            'label' =>"Title",
                            'value' => 'What We Do For Your Business'
                        ]
                    ],
                    "blog_slide_description" => [
                        'text_html' => [
                            'label' =>"Description",
                            'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                        ]
                    ],
                    "blog_slide_link" => [
                        'url' => [
                            'label' =>"Link",
                            'value' => [
                                'text' => 'discover more',
                                'class' => 'mitor-btn',
                                'link' => '#',
                            ]
                        ]
                    ],
                    "blog_slide_container" => [
                        'text_html' => [
                            'label' =>"Content",
                            'value' => '<div class="ml-auto swiper blog-carousel">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="simple-card">
                                                        <div class="simple-card__img">
                                                            <div class="blog-date">
                                                                <span class="date">29</span>
                                                                <span class="month">june</span>
                                                            </div>
                                                            <a href="#"><img
                                                                    src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/research-2.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="simple-card__body">
                                                            <div class="sc-user-info">
                                                                <div class="img-bloc">
                                                                    <a href="#"><img
                                                                            src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/research-2.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="user-info">
                    
                                                                    <h5 class="user-title h5">sanjana parvin</h5>
                                                                    <div class="user-desc">
                                                                        <span class="user-role"><a href="#">admin</a></span> | <span
                                                                            class="user-date">25 january
                                                                            2022</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sc-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M32 32C49.67 32 64 46.33 64 64V400C64 408.8 71.16 416 80 416H480C497.7 416 512 430.3 512 448C512 465.7 497.7 480 480 480H80C35.82 480 0 444.2 0 400V64C0 46.33 14.33 32 32 32zM128 128C128 110.3 142.3 96 160 96H352C369.7 96 384 110.3 384 128C384 145.7 369.7 160 352 160H160C142.3 160 128 145.7 128 128zM288 192C305.7 192 320 206.3 320 224C320 241.7 305.7 256 288 256H160C142.3 256 128 241.7 128 224C128 206.3 142.3 192 160 192H288zM416 288C433.7 288 448 302.3 448 320C448 337.7 433.7 352 416 352H160C142.3 352 128 337.7 128 320C128 302.3 142.3 288 160 288H416z" />
                                                                </svg>
                                                            </div>
                                                            <h4 class="sc-title h4"><a href="#">Market Research</a></h4>
                                                            <div class="sc-desc">Apparently we had reached a great height in the atmosphere
                                                                for
                                                                the
                                                                sky was a dead black had ceased to twinkle.</div>
                                                            <div class="sc-link">
                                                                <a href="#">learn more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="simple-card">
                                                        <div class="simple-card__img">
                                                            <div class="blog-date">
                                                                <span class="date">29</span>
                                                                <span class="month">june</span>
                                                            </div>
                                                            <a href="#"><img
                                                                    src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/research-2.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="simple-card__body">
                                                            <div class="sc-user-info">
                                                                <div class="img-bloc">
                                                                    <a href="#"><img
                                                                            src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/research-2.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="user-info">
                    
                                                                    <h5 class="user-title h5">sanjana parvin</h5>
                                                                    <div class="user-desc">
                                                                        <span class="user-role"><a href="#">admin</a></span> | <span
                                                                            class="user-date">25 january
                                                                            2022</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sc-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M32 32C49.67 32 64 46.33 64 64V400C64 408.8 71.16 416 80 416H480C497.7 416 512 430.3 512 448C512 465.7 497.7 480 480 480H80C35.82 480 0 444.2 0 400V64C0 46.33 14.33 32 32 32zM128 128C128 110.3 142.3 96 160 96H352C369.7 96 384 110.3 384 128C384 145.7 369.7 160 352 160H160C142.3 160 128 145.7 128 128zM288 192C305.7 192 320 206.3 320 224C320 241.7 305.7 256 288 256H160C142.3 256 128 241.7 128 224C128 206.3 142.3 192 160 192H288zM416 288C433.7 288 448 302.3 448 320C448 337.7 433.7 352 416 352H160C142.3 352 128 337.7 128 320C128 302.3 142.3 288 160 288H416z" />
                                                                </svg>
                                                            </div>
                                                            <h4 class="sc-title h4"><a href="#">Market Research</a></h4>
                                                            <div class="sc-desc">Apparently we had reached a great height in the atmosphere
                                                                for
                                                                the
                                                                sky was a dead black had ceased to twinkle.</div>
                                                            <div class="sc-link">
                                                                <a href="#">learn more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="simple-card">
                                                        <div class="simple-card__img">
                                                            <div class="blog-date">
                                                                <span class="date">29</span>
                                                                <span class="month">june</span>
                                                            </div>
                                                            <a href="#"><img
                                                                    src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/research-2.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="simple-card__body">
                                                            <div class="sc-user-info">
                                                                <div class="img-bloc">
                                                                    <a href="#"><img
                                                                            src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/research-2.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="user-info">
                    
                                                                    <h5 class="user-title h5">sanjana parvin</h5>
                                                                    <div class="user-desc">
                                                                        <span class="user-role"><a href="#">admin</a></span> | <span
                                                                            class="user-date">25 january
                                                                            2022</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sc-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M32 32C49.67 32 64 46.33 64 64V400C64 408.8 71.16 416 80 416H480C497.7 416 512 430.3 512 448C512 465.7 497.7 480 480 480H80C35.82 480 0 444.2 0 400V64C0 46.33 14.33 32 32 32zM128 128C128 110.3 142.3 96 160 96H352C369.7 96 384 110.3 384 128C384 145.7 369.7 160 352 160H160C142.3 160 128 145.7 128 128zM288 192C305.7 192 320 206.3 320 224C320 241.7 305.7 256 288 256H160C142.3 256 128 241.7 128 224C128 206.3 142.3 192 160 192H288zM416 288C433.7 288 448 302.3 448 320C448 337.7 433.7 352 416 352H160C142.3 352 128 337.7 128 320C128 302.3 142.3 288 160 288H416z" />
                                                                </svg>
                                                            </div>
                                                            <h4 class="sc-title h4"><a href="#">Market Research</a></h4>
                                                            <div class="sc-desc">Apparently we had reached a great height in the atmosphere
                                                                for
                                                                the
                                                                sky was a dead black had ceased to twinkle.</div>
                                                            <div class="sc-link">
                                                                <a href="#">learn more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex d-lg-none pt-4">
                                                <div class="swiper-pagination carousel-rond"></div>
                                            </div>
                                        </div>'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}