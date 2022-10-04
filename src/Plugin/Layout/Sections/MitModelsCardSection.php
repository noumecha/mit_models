<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_card_section",
 *   label = @Translation(" Mit_Models : Card Section "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_card_section",
 *   library = "mit_models/mit_models_card_section",
 *   default_region = "mc_title",
 *   regions = {
 *     "mc_title" = {
 *       "label" = @Translation("mc_title"),
 *     },
 *     "mc_description" = {
 *       "label" = @Translation("mc_description"),
 *     },
 *     "mc_image" = {
 *       "label" = @Translation("mc_image"),
 *     },
 *     "mc_btn" = {
 *      "label" = @Translation("mc_btn"),
 *     },
 *     "listable_items" = {
 *      "label" = @Translation("listable_items"),
 *     },
 *   }
 * )
 */

class MitModelsCardSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_card_section.png");
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
                    'mitor-card--right' => 'rectangle-right-normal',
                    'mitor-card--carree' => 'carree',
                    'mitor-card--reverse' => 'carree-reverse',
                    'mitor-card--reverse   mitor-card--carree-right-up' => 'carree-reverse-right-up',
                    'mitor-card--carree-up' => 'carree-up',
                    'mitor-card--reverse mitor-card--carree-right' => 'carree-reverse-right',
                    'mitor-card--right  mitor-card--reverse' => 'rectangle-right-reverse',
                    'mitor-card--left' => 'rectangle-left-normal',
                    'mitor-card--left  mitor-card--reverse' => 'rectangle-left-reverse',
                    'mitor-card--triangle-right' => 'triangle-right',
                    'mitor-card--triangle-right  mitor-card--reverse' => 'triangle-right-reverse',
                    'mitor-card--triangle' => 'triangle-left',
                    'mitor-card--triangle  mitor-card--reverse' => 'triangle-left-reverse',
                    'mitor-card--right mitor-card--video' => 'right-video',
                    'mitor-card--right mitor-card--reverse mitor-card--video' => 'right-reverse-video',
                    'mitor-card--left mitor-card--video' => 'left-video',
                    'mitor-card--left mitor-card--video mitor-card--reverse' => 'left-video-reverse'
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
                    'mc_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => ' We Ensure the Success of Your Products and Business '
                        ]
                    ],
                    'mc_description' => [
                        'text_html' => [
                            'label' => ' Descritpion ',
                            'value' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore
                                        et dolore magna aliqua. Quis ipsum suspe ndisse ultrices gravida. Risus commodo viverra
                                        maecenas
                                        ccumsanamet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et
                                        dolore
                                        magna aliqua. Quis ipsum suspendisse ultrices Letraset sheets containing gravida.
                                        <ul>
                                            <li>
                                                There are many variations of passages of Lorem Ipsum available, but the majority
                                                have
                                                suffered.</li>
                                            <li>mangoste
                                                There are many variations of passages of Lorem Ipsum available, but the majority
                                                have
                                                suffered. filbonar </li>
                                            <li>mangoste
                                                There are many variations of passages of Lorem Ipsum available, but the majority
                                                have
                                                suffered.nar </li>
                                        </ul>'
                        ]
                    ],
                    'mc_image' => [
                        'text_html' => [
                            'label' => ' Image ',
                            'value' => ' <a href="#">
                                            <img src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-1/product-2.jpg"
                                                alt="">
                                        </a>  '
                        ]
                    ],
                    "listable_items" => [
                        'text_html' => [
                            'label' =>"Element listable",
                            'value' => ""
                        ]
                    ],
                    'mc_btn' => [
                        'url' => [
                            'label' => 'LIEN',
                            'value' => [
                                'text' => 'Contact us',
                                'link' => '#',
                                'class' => 'mitor-btn'
                            ]
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}