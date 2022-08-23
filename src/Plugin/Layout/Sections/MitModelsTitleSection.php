<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_title_section",
 *   label = @Translation(" Mit_Models : Title "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_title_section",
 *   library = "mit_models/mit_models_title_section",
 *   default_region = "title",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description"),
 *     },
 *     "title_section_btn" = {
 *      "label" = @Translation("title_section_btn"),
 *     },
 *     "teaser_container" = {
 *      "label" = @Translation("teaser_container"),
 *     },
 *   }
 * )
 */

class MitModelsTitleSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_title.png");
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
                'value' => 'select',
                'options' => [
                    'mitor-section-title--bg' => 'before-bg',
                    'bg-light' => 'bg-light'
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
                    'title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => ' Best Digital Agency Since 1998 Over the internet '
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => ' Descritpion ',
                            'value' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident amet, nam doloremque error sequi quos fugiat unde eligendi aut fugit quibusdam adipisci ipsa magni praesentium accusamus quas laboriosam? At.  '
                        ]
                    ],
                    'teaser_container' => [
                        'text_html' => [
                            'label' => 'Section card Container',
                            'value' => '<div class="mitor-card mitor-card--triangle-right  mitor-card--reverse  row">
                                            <div class="mitor-card__img col-lg-6">
                                                <div class="img-bloc">
                                                    <a href="#">
                                                        <img src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-1/product-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mitor-card__body col-lg-6 pt-3 pt-lg-0">
                                                <h3 class="mc-title">
                                                    We Ensure the Success of Your Products and Business</h3>
                                                <div class="mc-description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                    labore
                                                    et dolore magna aliqua. Quis ipsum suspe ndisse ultrices gravida. Risus commodo viverra
                                                    maecenas
                        
                        
                        
                        
                                                    ccumsanamet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et
                                                    dolore
                                                    magna aliqua. Quis ipsum suspendisse ultrices Letraset sheets containing gravida.
                                                    <ol>
                                                        <li>
                                                            <div>
                                                                <h5>Cesi est un titre</h5>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the
                                                                    majority
                                                                    have
                                                                    suffered.</p>
                                                            </div>
                                                        </li>
                                                        <li>mangoste
                                                            There are many variations of passages of Lorem Ipsum available, but the majority
                                                            have
                                                            suffered. filbonar </li>
                                                        <li>mangoste
                                                            There are many variations of passages of Lorem Ipsum available, but the majority
                                                            have
                                                            suffered.nar </li>
                        
                        
                                                    </ol>
                                                </div>
                                                <a href="#" class="mitor-btn  ">Contact us</a>
                                            </div>
                                        </div>'
                        ]
                    ],
                    'title_section_btn' => [
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