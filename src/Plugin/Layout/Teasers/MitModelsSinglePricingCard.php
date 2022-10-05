<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_single_pricing_card",
 *   label = @Translation(" Mit_Models : Pricing Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_single_pricing_card",
 *   library = "mit_models/mit_models_single_pricing_card",
 *   default_region = "pricing_title",
 *   regions = {
 *     "big_svg" = {
 *       "label" = @Translation("big_svg"),
 *      },
 *     "pricing_title" = {
 *       "label" = @Translation("pricing_title")
 *     },
 *     "princing_price" = {
 *       "label" = @Translation("princing_price")
 *     },
 *     "pricing_elements" = {
 *       "label" = @Translation("pricing_elements")
 *     },
 *     "princing_bottom_link" = {
 *       "label" = @Translation("princing_bottom_link")
 *     },
 *     "pricing_bottom_svg" = {
 *       "label" = @Translation("pricing_bottom_svg")
 *     },
 *     "pricing_counter" = {
 *       "label" = @Translation("pricing_counter"),
 *     },
 *     "princing_duration" = {
 *       "label" = @Translation("princing_duration"),
 *     },
 *   }
 * )
 */
class MitModelsSinglePricingCard extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_single_pricing_card.png");
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
            'region_tag_pricing_title' => 'h6',
            "derivate" => [
                'value' => 'selected',
                'options' => [
                    'single-pricing-card--svg-flat' => 'svg-flat',
                    'single-pricing-card--plan-counter' => 'plan-counter',
                    'single-pricing-card--svg-bold' => 'svg-bold',
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Formulaire de contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'big_svg' => [
                        'text_html' => [
                            'label' => 'SVG big',
                            'value' => ' <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                width="100" height="100" preserveAspectRatio="xMidYMid meet"
                                                viewBox="0 0 1536 1536">
                                            <path fill="currentColor"
                                                    d="m363 1408l91-91l-235-235l-91 91v107h128v128h107zm523-928q0-22-22-22q-10 0-17 7l-542 542q-7 7-7 17q0 22 22 22q10 0 17-7l542-542q7-7 7-17zm-54-192l416 416l-832 832H0v-416zm683 96q0 53-37 90l-166 166l-416-416l166-165q36-38 90-38q53 0 91 38l235 234q37 39 37 91z" />
                                        </svg>'
                        ]
                    ],
                    'teaser_description' => [
                        'text_html' => [
                            'label' => 'teaser description',
                            'value' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni temporibus saepe consectetur
                            ullam atque molestias! obcaecati'
                        ]
                    ],
                    'pricing_title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => ' professional'
                        ]
                    ],
                    'princing_duration' => [
                        'text_html' => [
                            'label' => 'Duration',
                            'value' => '/month'
                        ],
                    ],
                    'princing_price' => [
                        'text_html' => [
                            'label' => 'Price',
                            'value' => '$409'
                        ]
                    ],
                    'pricing_elements' => [
                        'text_html' => [
                            'label' => 'Element list',
                            'value' => '<li class="element">brand developpment</li>
                                        <li class="element">user analysis</li>
                                        <li class="element">project management</li>
                                        <li class="element">market research</li>
                                        <li class="element">Product solutions</li>
                                        <li class="element">user element</li>'
                        ]
                    ],
                    'pricing_counter' => [
                        'text_html' => [
                            'label' => 'Pricing counter',
                            'value' => ' <button class=" ctrlBtn" id="decrement">
                                            -
                                        </button>
                                        <input type="text" value="1" id="counterValue" class="form-control text-center">
                                        <button class=" ctrlBtn" id="increment">
                                            +
                                        </button>'
                        ]
                    ],
                    'princing_bottom_link' => [
                        'url' => [
                            'label' =>  'Link',
                            'value' =>  [
                                'text' => 'Choose Plan',
                                'link' => '#',
                                'class' => 'link'
                            ]
                        ]
                    ],
                    'pricing_bottom_svg' => [
                        'text_html' => [
                            'label' => 'Pricing Bottom SVG',
                            'value' => '<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                width="0.88em"
                                                height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                    d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z" />
                                        </svg>'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}