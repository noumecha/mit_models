<?php

/**
 * mit_ models menu
 *
 * @{inhreitdoc}
 */
namespace Drupal\mit_models\Plugin\Layout\Sections\Menus;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Mit Models menu
 *
 * @Layout (
 *   id = "mit_models_menu",
 *   label = @Translation("mit_models_menu"),
 *   category = @Translation("Formatage Models"),
 *   path = "layouts/sections/menus",
 *   template = "mit_models_menu",
 *   library = "mit_models/mit_models_menu",
 *   default_region = "menu_nav",
 *   regions = {
 *      "menu_nav" = {
 *          "label" = @Translation("menu_nav"),
 *      },
 *      "menu_brand" = {
 *          "label" = @Translation("menu_brand"),
 *      }
 *   }
 * )
 *
 */
class MitModelsMenu extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'mit_models') . "/icones/menus/mit_models_menu.png");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
   *
   */
    public function build(array $regions) {

        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);
        if (is_array($build['menu_nav']))
            $build['menu_nav'] = $this->getMenus($build['menu_nav']);
        //dump($build['menu_nav']);
        return $build;
    }
    /**
     * {@inheritdoc}
     */
    private function getMenus(array $menu_nav) {
        foreach ($menu_nav as $k => $m) {
            if (isset($m['#base_plugin_id']) && $m['#base_plugin_id'] === 'system_menu_block') {
                // set new theme.
                $menu_nav[$k]['content']['#theme'] = 'layoutmenu_mit_models_first_menu';
              
                // add class
                $menu_nav[$k]['content']['#attributes'] = [
                    'class' => [
                        'nav-list'
                    ]
                ];
                //
                $this->formatListMenus($menu_nav[$k]['content']['#items']);
            }
        }
        return $menu_nav;
    }
    /**
     * {@inheritdoc}
     */
    private function formatListMenus(array &$items) {
        foreach ($items as $k => $item) {
            if (!empty($item['attributes'])) {
                /**
                 *
                 * @var \Drupal\Core\Template\Attribute $attribute
                 */
                $attribute = $item['attributes'];
                $attribute->addClass('nav-item');
                // add sub menu
                if ($item['is_expanded']) {
                    $attribute->addClass('sub-alt');
                }
                // menu actif
                if ($item['in_active_trail']) {
                    $attribute->addClass('nav-item--active');
                }
                $items[$k]['attributes'] = $attribute;
                //
                if (!empty($item['below'])) {
                    $this->formatListMenus($item['below']);
                    $items[$k]['below'] = $item['below'];
                }
            }
        }
    }
  
    /**
     *  
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
        return parent::defaultConfiguration() + [
            'css' => '',
            'Content' => [
              'builder-form' => true,
              'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
              ],
                'fields' => [
                    'menu_nav' => [
                        'text_html' => [
                            'label' => 'Menu content',
                            'value' => ""
                        ]
                    ],
                    'menu_brand' => [
                        'text_html' => [
                            'label' => 'Menu Brand',
                            'value' => '<img class="logo-2" src="http://slidesigma.com/themes/html/mitor/assets/img/logo.png" alt="">'
                        ]
                    ]
                ]
            ]
        ];
    }
  
}