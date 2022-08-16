<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_simple_card_teaser",
 *   label = @Translation(" Mit_Models : Simple Card "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_simple_card_teaser",
 *   library = "mit_models/mit_models_simple_card_teaser",
 *   default_region = "card_title",
 *   regions = {
 *     "card_image" = {
 *       "label" = @Translation("card_image"),
 *     },
 *     "card_description" = {
 *       "label" = @Translation("card_description"),
 *     },
 *     "card_icon" = {
 *       "label" = @Translation("card_icon"),
 *     },
 *     "card_link" = {
 *       "label" = @Translation("card_link"),
 *     },
 *     "card_image" = {
 *       "label" = @Translation("card_image"),
 *     },
 *     "card_user_image" = {
 *       "label" = @Translation("card_user_image"),
 *     },
 *     "card_user_title" = {
 *       "label" = @Translation("card_user_title"),
 *     },
 *     "card_user_role" = {
 *       "label" = @Translation("card_user_role"),
 *     },
 *     "card_user_date" = {
 *       "label" = @Translation("card_user_date"),
 *     },
 *   }
 * )
 */
class MitModelsSimpleCardTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_simple_card.png");
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
            'load_library' => true,
            "derivate" => [
                'value' => '',
                'options' => [
                    'simple-card--user-info' => 'user-info',
                    'simple-card--icon' => 'icon',
                    'simple-card--icon-bg' => 'icon-bg',
                    'simple-card--icon-left' => 'icon-left',
                    'simple-card--icon-no-effect' => 'icon-no-effect'
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Formulaire de contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'card_title' => [
                        'text_html' => [
                            'label' => 'Titre card',
                            'value' => 'Market Researchc'
                        ]
                    ],
                    'card_description' => [
                        'text_html' => [
                            'label' => 'card description',
                            'value' => 'Apparently we had reached a great height in the atmosphere for the
                            sky was a dead black had ceased to twinkle.'
                        ]
                    ],
                    'card_icon' => [
                        'text_html' => [
                            'label' => 'Card icon',
                            'value' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M255.1 192H.1398C2.741 117.9 41.34 52.95 98.98 14.1C112.2 5.175 129.8 9.784 138.9 22.92L255.1 192zM384 160C384 124.7 412.7 96 448 96H480C497.7 96 512 110.3 512 128C512 145.7 497.7 160 480 160H448V224C448 249.2 442.2 274.2 430.9 297.5C419.7 320.8 403.2 341.9 382.4 359.8C361.6 377.6 336.9 391.7 309.7 401.4C282.5 411 253.4 416 223.1 416C194.6 416 165.5 411 138.3 401.4C111.1 391.7 86.41 377.6 65.61 359.8C44.81 341.9 28.31 320.8 17.05 297.5C5.794 274.2 0 249.2 0 224H384L384 160zM31.1 464C31.1 437.5 53.49 416 79.1 416C106.5 416 127.1 437.5 127.1 464C127.1 490.5 106.5 512 79.1 512C53.49 512 31.1 490.5 31.1 464zM416 464C416 490.5 394.5 512 368 512C341.5 512 320 490.5 320 464C320 437.5 341.5 416 368 416C394.5 416 416 437.5 416 464z" />
                                        </svg>'
                        ]
                    ],
                    'card_image' => [
                        'text_html' => [
                            'label' => 'card Image',
                            'value' => '<a href="#"><img
                                        src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/research-2.jpg"
                                        alt=""></a>'
                        ]
                    ],
                    'card_link' => [
                        'url' => [
                            'label' =>  'Link',
                            'value' =>  [
                                'text' => 'learn-more',
                                'link' => '#',
                                'class' => 'sc-link'
                            ]
                        ]
                    ],
                    'card_user_image' => [
                        'text_html' => [
                            'label' => 'Image Utilisateur',
                            'value' => '<a href="#"><img
                                            src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-2/research-2.jpg"
                                            alt="">
                                        </a>'
                        ]
                    ],
                    'card_user_title' => [
                        'text_html' => [
                            'label' => 'Title Utilisateur',
                            'value' => 'sanjana parvin'
                        ]
                    ],
                    'card_user_role' => [
                        'text_html' => [
                            'label' => 'Role Utilisateur',
                            'value' => 'admin'
                        ]
                    ],
                    'card_user_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => '25 january 2022'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}