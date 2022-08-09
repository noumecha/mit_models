<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_contact_section",
 *   label = @Translation(" Mit_Models : Contact "),
 *   category = @Translation("mit_models),
 *   path = "layouts/sections",
 *   template = "mit_models_contact_section",
 *   library = "mit_models/mit_models_contact_section",
 *   default_region = "contatct_title",
 *   regions = {
 *     "contatct_title" = {
 *       "label" = @Translation("contatct_title"),
 *     },
 *     "contatct_description" = {
 *       "label" = @Translation("contatct_description")
 *     },
 *     "contatct_list" = {
 *       "label" = @Translation("contatct_list")
 *     },
 *     "contact_image" = {
 *       "label" = @Translation("contatct_image")
 *     },
 *     "contact_link" = {
 *       "label" = @Translation("contact_link")
 *     }
 *   }
 * )
 */

class MitModelsContactSection extends FormatageModelsSection {
    
    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/sections/mit_models_contact.png");
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
    
    function defaultConfiguration() {
        return [
            'load_libray' => true,
            'region_tag_title' => 'h1',
            "derivate" => [
                'value' => 'right',
                'options' => [
                    'right' => 'right',
                    'left' => 'left',
                    'right_cover' => 'right__cover',
                    'left_cover' => 'left__cover'
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    'contact_title' => [
                        'text' => [
                            'label' => 'Titre',
                            'value' => ' Best Digital Agency Since 1998 Over the internet '
                        ]
                    ],
                    'contact_description' => [
                        'text_html' => [
                            'label' => ' Contact descritpion ',
                            'value' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident amet, nam doloremque error sequi quos fugiat unde eligendi aut fugit quibusdam adipisci ipsa magni praesentium accusamus quas laboriosam? At.  '
                        ]
                    ],
                    'contact_list' => [
                        'text_html' => [
                            'label' => ' Contact List Item ',
                            'value' => '  '
                        ]
                    ],
                    'contact_link' => [
                        'url' => [
                            'label' => "link",
                            "value" => [
                                "link" => "#",
                                "text" => "Contact Us",
                                "class" => "btn btn-outline-primary"
                            ]
                        ]
                    ],
                    'contact_image' => [
                        'img_bg' => [
                            'label' => 'image',
                            'fids' => []
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
    
}