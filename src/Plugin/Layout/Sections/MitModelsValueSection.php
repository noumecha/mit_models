<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_value_section",
 *   label = @Translation(" Mit_Models : Value Section "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/sections",
 *   template = "mit_models_value_section",
 *   library = "mit_models/mit_models_value_section",
 *   default_region = "value_section_title",
 *   regions = {
 *     "value_section_bgimage" = {
 *       "label" = @Translation("value_section_bgimage"),
 *     },
 *     "value_section_title" = {
 *       "label" = @Translation("value_section_title"),
 *     },
 *     "value_section_description" = {
 *       "label" = @Translation("value_section_description"),
 *     },
 *     "value_section_teaser" = {
 *      "label" = @Translation("value_section_teaser"),
 *     },
 *   }
 * )
 */

class MitModelsValueSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_value_section.png");
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
            'region_tag_value_section_description' => 'h3',
            'region_css_value_section_title' => 'h1 text-white',
            'region_css_value_section_description' => 'h5 text-white',
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    'value_section_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'our core values'
                        ]
                    ],
                    'value_section_description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate deleniti vero quaerat, eum voluptas
                            odio asperiores unde molestiae dolorem enim, sunt facere soluta!'
                        ]
                    ],
                    'value_section_bgimage' => [
                        'img_bg' => [
                            'label' => 'Bg Image'
                        ]
                    ],
                    'value_section_teaser' => [
                        'text_html' => [
                            'label' => 'Type Deux',
                            'value' => '<div class="col-lg-3">
                                            <div class="value-card">
                                                <div class="value-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                                    </svg>

                                                </div>
                                                <div class="value-title h5">real user data</div>
                                                <div class="value-desc">Apparent was a dead black has ceased twinkle</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="value-card">
                                                <div class="value-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>

                                                </div>
                                                <div class="value-title h5">affordable price</div>
                                                <div class="value-desc">Apparent was a dead black has ceased twinkle</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="value-card">
                                                <div class="value-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                                    </svg>

                                                </div>
                                                <div class="value-title h5">great support</div>
                                                <div class="value-desc">Apparent was a dead black has ceased twinkle</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="value-card">
                                                <div class="value-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                                    </svg>

                                                </div>
                                                <div class="value-title h5">testimonials</div>
                                                <div class="value-desc">Apparent was a dead black has ceased twinkle</div>
                                            </div>
                                        </div>'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}