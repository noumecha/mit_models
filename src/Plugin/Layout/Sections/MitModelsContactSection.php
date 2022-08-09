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
                            'value' => '<li class="list-element">
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="35" height="35" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13s13-5.8 13-13c0-1.4-.188-2.794-.688-4.094L26.688 13.5c.2.8.313 1.6.313 2.5c0 6.1-4.9 11-11 11S5 22.1 5 16S9.9 5 16 5c3 0 5.694 1.194 7.594 3.094L25 6.688C22.7 4.388 19.5 3 16 3zm11.28 4.28L16 18.563l-4.28-4.28l-1.44 1.437l5 5l.72.686l.72-.687l12-12l-1.44-1.44z"/></svg>
                                            </span>
                                            <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda mollitia officiis tempora, molestiae ut unde!</p>
                                        </li>
                                        <li class="list-element">
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="35" height="35" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13s13-5.8 13-13c0-1.4-.188-2.794-.688-4.094L26.688 13.5c.2.8.313 1.6.313 2.5c0 6.1-4.9 11-11 11S5 22.1 5 16S9.9 5 16 5c3 0 5.694 1.194 7.594 3.094L25 6.688C22.7 4.388 19.5 3 16 3zm11.28 4.28L16 18.563l-4.28-4.28l-1.44 1.437l5 5l.72.686l.72-.687l12-12l-1.44-1.44z"/></svg>
                                            </span>
                                            <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda mollitia officiis tempora, molestiae ut unde!</p>
                                        </li>
                                        <li class="list-element">
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="35" height="35" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13s13-5.8 13-13c0-1.4-.188-2.794-.688-4.094L26.688 13.5c.2.8.313 1.6.313 2.5c0 6.1-4.9 11-11 11S5 22.1 5 16S9.9 5 16 5c3 0 5.694 1.194 7.594 3.094L25 6.688C22.7 4.388 19.5 3 16 3zm11.28 4.28L16 18.563l-4.28-4.28l-1.44 1.437l5 5l.72.686l.72-.687l12-12l-1.44-1.44z"/></svg>
                                            </span>
                                            <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda mollitia officiis tempora, molestiae ut unde!</p>
                                        </li>  '
                        ]
                    ],
                    'contact_link' => [
                        'url' => [
                            'label' => "link",
                            "value" => [
                                "link" => "#",
                                "text" => "Contact Us",
                                "class" => "link-us"
                            ]
                        ]
                    ],
                    'contact_image' => [
                        'text_html' => [
                            'label' => 'image',
                            'value' => '<img src="http://slidesigma.com/themes/html/mitor/assets/img/homepage-1/product-2.jpg" class="contact-lutin" alt="">'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
    
}