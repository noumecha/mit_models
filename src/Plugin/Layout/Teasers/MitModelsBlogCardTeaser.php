<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from mit_models module
 *
 * @Layout(
 *   id = "mit_models_blog_card_teaser",
 *   label = @Translation(" Mit_Models : Blog Card Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "mit_models_blog_card_teaser",
 *   library = "mit_models/mit_models_blog_card_teaser",
 *   default_region = "blog_card_dater",
 *   regions = {
 *     "blog_card_date" = {
 *       "label" = @Translation("blog_card_date"),
 *      },
 *     "blog_card_month" = {
 *       "label" = @Translation("blog_card_month"),
 *     },
 *     "blog_card_image" = {
 *       "label" = @Translation("blog_card_image"),
 *     },
 *     "blog_card_title" = {
 *       "label" = @Translation("blog_card_title"),
 *     },
 *     "blog_card_pdate" = {
 *       "label" = @Translation("blog_card_pdate"),
 *     },
 *     "blog_card_desc" = {
 *       "label" = @Translation("blog_card_desc"),
 *     },
 *     "blog_card_link" = {
 *       "label" = @Translation("blog_card_link"),
 *     },
 *     "blog_card_svg" = {
 *       "label" = @Translation("blog_card_svg"),
 *     },
 *   }
 * )
 */
class MitModelsBlogCardTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/teasers/mit_models_blog_card_teaser.png");
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
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Formulaire de contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'blog_card_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => '29'
                        ]
                    ],
                    'blog_card_month' => [
                        'text_html' => [
                            'label' => 'Month',
                            'value' => 'June'
                        ]
                    ],
                    'blog_card_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img src="http://slidesigma.com/themes/html/mitor/assets/img/blog/b-learn1.jpg" alt="">'
                        ]
                    ],
                    'blog_card_title' => [
                        'url' => [
                            'label' => 'Title',
                            'value' => [
                                'text' => 'There are many variation of passages of lorem ipsum available, but the majority have sufferred.',
                                'link' => '#',
                                'class' => 'blog-title'
                            ]
                        ]
                    ],
                    'blog_card_pdate' => [
                        'text_html' => [
                            'label' => 'Posted Date',
                            'value' => '09 sept 2022'
                        ]
                    ],
                    'blog_card_desc' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit enim totam, harum pariatur ut quasi molestiae, asperiores eveniet magnam quis ab praesentium cumque dolores assumenda.'
                        ]
                    ],
                    'blog_card_link' => [
                        'url' => [
                            'label' => 'Lien',
                            'value' => [
                                'text' => 'learn more',
                                'link' => '#',
                                'class' => 'more-lnk'
                            ]
                        ]
                    ],
                    'blog_card_svg' => [
                        'text_html' => [
                            'label' => 'SVG icon',
                            'value' => '>'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}