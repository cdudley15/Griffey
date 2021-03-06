<?php
/**
 * Max Mega Menu Themes
 *
 * @package	HelpingHands
 * @author Skat
 * @copyright 2015, Skat Design
 * @link http://www.skat.tf
 * @since HelpingHands 1.0
 */

// change default max megamenu options

if ( !function_exists( 'sd_default_megamenu_options' ) ) {
	function sd_default_megamenu_options() {
	
		$themes['default'] = array(
					'title'                                     => __("Default", "megamenu"),
					'container_background_from'                 => 'transparent',
					'container_background_to'                   => 'transparent',
					'container_padding_left'                    => '0px',
					'container_padding_right'                   => '0px',
					'container_padding_top'                     => '0px',
					'container_padding_bottom'                  => '0px',
					'container_border_radius_top_left'          => '0px',
					'container_border_radius_top_right'         => '0px',
					'container_border_radius_bottom_left'       => '0px',
					'container_border_radius_bottom_right'      => '0px',
					'font_size'                                 => '13px',
					'font_color'                                => '#73787c',
					'font_family'                               => 'inherit',
					'arrow_up'                                  => 'dash-f142',
					'arrow_down'                                => 'dash-f140',
					'arrow_left'                                => 'dash-f141',
					'arrow_right'                               => 'dash-f139',
					'menu_item_background_from'                 => 'transparent',
					'menu_item_background_to'                   => 'transparent',
					'menu_item_background_hover_from'           => 'transparent',
					'menu_item_background_hover_to'             => 'transparent',
					'menu_item_spacing'                         => '0px',
					'menu_item_link_font'                       => 'inherit',
					'menu_item_link_font_size'                  => '13px',
					'menu_item_link_height'                     => '40px',
					'menu_item_link_color'                      => '#7f8b99',
					'menu_item_link_weight'                     => 'bold',
					'menu_item_link_text_transform'             => 'uppercase',
					'menu_item_link_text_decoration'            => 'none',
					'menu_item_link_color_hover'                => '#435061',
					'menu_item_link_weight_hover'               => 'bold',
					'menu_item_link_text_decoration_hover'      => 'none',
					'menu_item_link_padding_left'               => '15px',
					'menu_item_link_padding_right'              => '15px',
					'menu_item_link_padding_top'                => '0px',
					'menu_item_link_padding_bottom'             => '0px',
					'menu_item_link_border_radius_top_left'     => '0px',
					'menu_item_link_border_radius_top_right'    => '0px',
					'menu_item_link_border_radius_bottom_left'  => '0px',
					'menu_item_link_border_radius_bottom_right' => '0px',
					'menu_item_border_color'                    => '#fff',
					'menu_item_border_left'                     => '0px',
					'menu_item_border_right'                    => '0px',
					'menu_item_border_top'                      => '0px',
					'menu_item_border_bottom'                   => '0px',
					'menu_item_border_color_hover'              => '#fff',
					'menu_item_highlight_current'               => 'on',
        		    'menu_item_divider'                         => 'off',
	    	        'menu_item_divider_color'                   => 'rgba(255, 255, 255, 0.1)',
		            'menu_item_divider_glow_opacity'            => '0.1',
					'panel_background_from'                     => '#fff',
					'panel_background_to'                       => '#fff',
					'panel_width'                               => '.sd-logo-menu-content',
					'panel_border_color'                        => '#e5edf2',
					'panel_border_left'                         => '1px',
					'panel_border_right'                        => '1px',
					'panel_border_top'                          => '1px',
					'panel_border_bottom'                       => '1px',
					'panel_border_radius_top_left'              => '0px',
					'panel_border_radius_top_right'             => '0px',
					'panel_border_radius_bottom_left'           => '0px',
					'panel_border_radius_bottom_right'          => '0px',
					'panel_header_color'                        => '#435061',
					'panel_header_text_transform'               => 'uppercase',
					'panel_header_font'                         => 'inherit',
					'panel_header_font_size'                    => '13px',
					'panel_header_font_weight'                  => 'bold',
					'panel_header_text_decoration'              => 'none',
					'panel_header_padding_top'                  => '0px',
					'panel_header_padding_right'                => '0px',
					'panel_header_padding_bottom'               => '10px',
					'panel_header_padding_left'                 => '0px',
					'panel_header_margin_top'                   => '0px',
					'panel_header_margin_right'                 => '0px',
					'panel_header_margin_bottom'                => '0px',
					'panel_header_margin_left'                  => '0px',
					'panel_header_border_color'                 => 'panel_header_color',
					'panel_header_border_left'                  => '0px',
					'panel_header_border_right'                 => '0px',
					'panel_header_border_top'                   => '0px',
					'panel_header_border_bottom'                => '0px',
					'panel_font_size'                           => '13px',
					'panel_font_family'                         => 'inherit',
					'panel_second_level_font_color'             => 'panel_header_color',
					'panel_second_level_font_color_hover'       => '#29af8a',
					'panel_second_level_text_transform'         => 'panel_header_text_transform',
					'panel_second_level_font'                   => 'panel_header_font',
					'panel_second_level_font_size'              => 'panel_header_font_size',
					'panel_second_level_font_weight'            => 'panel_header_font_weight',
					'panel_second_level_font_weight_hover'      => 'panel_header_font_weight',
					'panel_second_level_text_decoration'        => 'panel_header_text_decoration',
					'panel_second_level_text_decoration_hover'  => 'panel_header_text_decoration',
					'panel_second_level_background_hover_from'  => 'transparent',
					'panel_second_level_background_hover_to'    => 'transparent',
					'panel_second_level_padding_left'           => '0px',
					'panel_second_level_padding_right'          => '0px',
					'panel_second_level_padding_top'            => '0px',
					'panel_second_level_padding_bottom'         => '0px',
					'panel_second_level_margin_left'            => '0px',
					'panel_second_level_margin_right'           => '0px',
					'panel_second_level_margin_top'             => '0px',
					'panel_second_level_margin_bottom'          => '0px',
					'panel_second_level_border_color'           => 'rgba(0, 0, 0, 0)',
					'panel_second_level_border_left'            => '0px',
					'panel_second_level_border_right'           => '0px',
					'panel_second_level_border_top'             => '0px',
					'panel_second_level_border_bottom'          => '0px',
					'panel_third_level_font_color'              => 'panel_font_color',
					'panel_third_level_font_color_hover'        => 'panel_font_color',
					'panel_third_level_text_transform'          => 'none',
					'panel_third_level_font'                    => 'panel_font_family',
					'panel_third_level_font_size'               => 'panel_font_size',
					'panel_third_level_font_weight'             => 'normal',
					'panel_third_level_font_weight_hover'       => 'normal',
					'panel_third_level_text_decoration'         => 'none',
					'panel_third_level_text_decoration_hover'   => 'none',
					'panel_third_level_background_hover_from'   => 'transparent',
					'panel_third_level_background_hover_to'     => 'transparent',
					'panel_third_level_padding_left'            => '0px',
					'panel_third_level_padding_right'           => '0px',
					'panel_third_level_padding_top'             => '0px',
					'panel_third_level_padding_bottom'          => '0px',
					'panel_font_color'                          => '#435061',
					'panel_padding_left'                        => '20px',
					'panel_padding_right'                       => '20px',
					'panel_padding_top'                         => '20px',
					'panel_padding_bottom'                      => '20px',
					'panel_widget_padding_left'                 => '0px',
					'panel_widget_padding_right'                => '30px',
					'panel_widget_padding_top'                  => '0px',
					'panel_widget_padding_bottom'               => '0px',
					'flyout_width'                              => '200px',
		            'flyout_menu_background_from'               => '#f1f1f1',
		            'flyout_menu_background_to'                 => '#f1f1f1',
					'flyout_border_color'                        => '#e7eaed',
					'flyout_border_left'                         => '1px',
					'flyout_border_right'                        => '1px',
					'flyout_border_top'                          => '0px',
					'flyout_border_bottom'                       => '1px',
					'flyout_border_radius_top_left'             => '0px',
		            'flyout_border_radius_top_right'            => '0px',
        		    'flyout_border_radius_bottom_left'          => '0px',
		            'flyout_border_radius_bottom_right'         => '0px',
					'flyout_menu_item_divider'                  => 'off',
					'flyout_menu_item_divider_color'            => 'rgba(255, 255, 255, 0.1)',
					'flyout_padding_top'                        => '0px',
					'flyout_padding_right'                      => '0px',
					'flyout_padding_bottom'                     => '0px',
					'flyout_padding_left'                       => '0px',
					'flyout_link_padding_left'                  => '20px',
					'flyout_link_padding_right'                 => '20px',
					'flyout_link_padding_top'                   => '0px',
					'flyout_link_padding_bottom'                => '0px',
					'flyout_link_weight'                        => 'normal',
					'flyout_link_weight_hover'                  => 'normal',
					'flyout_link_height'                        => '40px',
					'flyout_link_text_decoration'               => 'none',
		            'flyout_link_text_decoration_hover'         => 'none',
					'flyout_background_from'                    => '#fff',
					'flyout_background_to'                      => '#fff',
					'flyout_background_hover_from'              => '#fff',
					'flyout_background_hover_to'                => '#fff',
					'flyout_link_size'                          => '13px',
		            'flyout_link_color'                         => '#435061',
		            'flyout_link_color_hover'                   => '#29af8a',
        		    'flyout_link_family'                        => 'inherit',
		            'flyout_link_text_transform'                => 'uppercase',
					'menu_item_align'                           => 'left',
					'responsive_breakpoint'                     => '992px',
					'responsive_text'                           => 'MENU',
					'line_height'                               => '30px',
					'z_index'                                   => '999',
					'shadow'                                    => 'off',
	        	    'shadow_horizontal'                         => '0px',
    	        	'shadow_vertical'                           => '0px',
        		    'shadow_blur'                               => '0px',
	    	        'shadow_spread'                             => '0px',
		            'shadow_color'                              => 'rgba(0, 0, 0, 0.1)',
					'transitions'                               => 'on',
					'custom_css'                                => ''
				);
				
				$themes['tob_bar_menu'] = array(
					'title'                                     => __("Top Bar Menu", "megamenu"),
					'container_background_from'                 => 'transparent',
					'container_background_to'                   => 'transparent',
					'container_padding_left'                    => '0px',
					'container_padding_right'                   => '0px',
					'container_padding_top'                     => '0px',
					'container_padding_bottom'                  => '0px',
					'container_border_radius_top_left'          => '0px',
					'container_border_radius_top_right'         => '0px',
					'container_border_radius_bottom_left'       => '0px',
					'container_border_radius_bottom_right'      => '0px',
					'font_size'                                 => '13px',
					'font_color'                                => '#73787c',
					'font_family'                               => 'inherit',
					'arrow_up'                                  => 'dash-f142',
					'arrow_down'                                => 'dash-f140',
					'arrow_left'                                => 'dash-f141',
					'arrow_right'                               => 'dash-f139',
					'menu_item_background_from'                 => 'transparent',
					'menu_item_background_to'                   => 'transparent',
					'menu_item_background_hover_from'           => '#ffffff',
					'menu_item_background_hover_to'             => '#ffffff',
					'menu_item_spacing'                         => '0px',
					'menu_item_link_font'                       => 'inherit',
					'menu_item_link_font_size'                  => '13px',
					'menu_item_link_height'                     => '50px',
					'menu_item_link_color'                      => '#9dedd7',
					'menu_item_link_weight'                     => 'bold',
					'menu_item_link_text_transform'             => 'uppercase',
					'menu_item_link_text_decoration'            => 'none',
					'menu_item_link_color_hover'                => '#435061',
					'menu_item_link_weight_hover'               => 'bold',
					'menu_item_link_text_decoration_hover'      => 'none',
					'menu_item_link_padding_left'               => '15px',
					'menu_item_link_padding_right'              => '15px',
					'menu_item_link_padding_top'                => '0px',
					'menu_item_link_padding_bottom'             => '0px',
					'menu_item_link_border_radius_top_left'     => '0px',
					'menu_item_link_border_radius_top_right'    => '0px',
					'menu_item_link_border_radius_bottom_left'  => '0px',
					'menu_item_link_border_radius_bottom_right' => '0px',
					'menu_item_border_color'                    => '#fff',
					'menu_item_border_left'                     => '0px',
					'menu_item_border_right'                    => '0px',
					'menu_item_border_top'                      => '0px',
					'menu_item_border_bottom'                   => '0px',
					'menu_item_border_color_hover'              => '#fff',
					'menu_item_highlight_current'               => 'on',
        		    'menu_item_divider'                         => 'off',
	    	        'menu_item_divider_color'                   => 'rgba(255, 255, 255, 0.1)',
		            'menu_item_divider_glow_opacity'            => '0.1',
					'panel_background_from'                     => '#fff',
					'panel_background_to'                       => '#fff',
					'panel_width'                               => '.sd-logo-menu-content',
					'panel_border_color'                        => '#e5edf2',
					'panel_border_left'                         => '1px',
					'panel_border_right'                        => '1px',
					'panel_border_top'                          => '1px',
					'panel_border_bottom'                       => '1px',
					'panel_border_radius_top_left'              => '0px',
					'panel_border_radius_top_right'             => '0px',
					'panel_border_radius_bottom_left'           => '0px',
					'panel_border_radius_bottom_right'          => '0px',
					'panel_header_color'                        => '#435061',
					'panel_header_text_transform'               => 'uppercase',
					'panel_header_font'                         => 'inherit',
					'panel_header_font_size'                    => '13px',
					'panel_header_font_weight'                  => 'bold',
					'panel_header_text_decoration'              => 'none',
					'panel_header_padding_top'                  => '0px',
					'panel_header_padding_right'                => '0px',
					'panel_header_padding_bottom'               => '10px',
					'panel_header_padding_left'                 => '0px',
					'panel_header_margin_top'                   => '0px',
					'panel_header_margin_right'                 => '0px',
					'panel_header_margin_bottom'                => '0px',
					'panel_header_margin_left'                  => '0px',
					'panel_header_border_color'                 => 'panel_header_color',
					'panel_header_border_left'                  => '0px',
					'panel_header_border_right'                 => '0px',
					'panel_header_border_top'                   => '0px',
					'panel_header_border_bottom'                => '0px',
					'panel_font_size'                           => '13px',
					'panel_font_family'                         => 'inherit',
					'panel_second_level_font_color'             => 'panel_header_color',
					'panel_second_level_font_color_hover'       => '#29af8a',
					'panel_second_level_text_transform'         => 'panel_header_text_transform',
					'panel_second_level_font'                   => 'panel_header_font',
					'panel_second_level_font_size'              => 'panel_header_font_size',
					'panel_second_level_font_weight'            => 'panel_header_font_weight',
					'panel_second_level_font_weight_hover'      => 'panel_header_font_weight',
					'panel_second_level_text_decoration'        => 'panel_header_text_decoration',
					'panel_second_level_text_decoration_hover'  => 'panel_header_text_decoration',
					'panel_second_level_background_hover_from'  => 'transparent',
					'panel_second_level_background_hover_to'    => 'transparent',
					'panel_second_level_padding_left'           => '0px',
					'panel_second_level_padding_right'          => '0px',
					'panel_second_level_padding_top'            => '0px',
					'panel_second_level_padding_bottom'         => '0px',
					'panel_second_level_margin_left'            => '0px',
					'panel_second_level_margin_right'           => '0px',
					'panel_second_level_margin_top'             => '0px',
					'panel_second_level_margin_bottom'          => '0px',
					'panel_second_level_border_color'           => 'rgba(0, 0, 0, 0)',
					'panel_second_level_border_left'            => '0px',
					'panel_second_level_border_right'           => '0px',
					'panel_second_level_border_top'             => '0px',
					'panel_second_level_border_bottom'          => '0px',
					'panel_third_level_font_color'              => 'panel_font_color',
					'panel_third_level_font_color_hover'        => 'panel_font_color',
					'panel_third_level_text_transform'          => 'none',
					'panel_third_level_font'                    => 'panel_font_family',
					'panel_third_level_font_size'               => 'panel_font_size',
					'panel_third_level_font_weight'             => 'normal',
					'panel_third_level_font_weight_hover'       => 'normal',
					'panel_third_level_text_decoration'         => 'none',
					'panel_third_level_text_decoration_hover'   => 'none',
					'panel_third_level_background_hover_from'   => 'transparent',
					'panel_third_level_background_hover_to'     => 'transparent',
					'panel_third_level_padding_left'            => '0px',
					'panel_third_level_padding_right'           => '0px',
					'panel_third_level_padding_top'             => '0px',
					'panel_third_level_padding_bottom'          => '0px',
					'panel_font_color'                          => '#435061',
					'panel_padding_left'                        => '20px',
					'panel_padding_right'                       => '20px',
					'panel_padding_top'                         => '20px',
					'panel_padding_bottom'                      => '20px',
					'panel_widget_padding_left'                 => '0px',
					'panel_widget_padding_right'                => '50px',
					'panel_widget_padding_top'                  => '0px',
					'panel_widget_padding_bottom'               => '0px',
					'flyout_width'                              => '200px',
		            'flyout_menu_background_from'               => '#f1f1f1',
		            'flyout_menu_background_to'                 => '#f1f1f1',
					'flyout_border_color'                        => '#e7eaed',
					'flyout_border_left'                         => '1px',
					'flyout_border_right'                        => '1px',
					'flyout_border_top'                          => '0px',
					'flyout_border_bottom'                       => '1px',
					'flyout_border_radius_top_left'             => '0px',
		            'flyout_border_radius_top_right'            => '0px',
        		    'flyout_border_radius_bottom_left'          => '0px',
		            'flyout_border_radius_bottom_right'         => '0px',
					'flyout_menu_item_divider'                  => 'off',
					'flyout_menu_item_divider_color'            => 'rgba(255, 255, 255, 0.1)',
					'flyout_padding_top'                        => '0px',
					'flyout_padding_right'                      => '0px',
					'flyout_padding_bottom'                     => '0px',
					'flyout_padding_left'                       => '0px',
					'flyout_link_padding_left'                  => '20px',
					'flyout_link_padding_right'                 => '20px',
					'flyout_link_padding_top'                   => '0px',
					'flyout_link_padding_bottom'                => '0px',
					'flyout_link_weight'                        => 'normal',
					'flyout_link_weight_hover'                  => 'normal',
					'flyout_link_height'                        => '50px',
					'flyout_link_text_decoration'               => 'none',
		            'flyout_link_text_decoration_hover'         => 'none',
					'flyout_background_from'                    => '#fff',
					'flyout_background_to'                      => '#fff',
					'flyout_background_hover_from'              => '#fff',
					'flyout_background_hover_to'                => '#fff',
					'flyout_link_size'                          => '13px',
		            'flyout_link_color'                         => '#435061',
		            'flyout_link_color_hover'                   => '#29af8a',
        		    'flyout_link_family'                        => 'inherit',
		            'flyout_link_text_transform'                => 'uppercase',
					'menu_item_align'                           => 'left',
					'responsive_breakpoint'                     => '992px',
					'responsive_text'                           => 'MENU',
					'line_height'                               => '50px',
					'z_index'                                   => '999',
					'shadow'                                    => 'off',
	        	    'shadow_horizontal'                         => '0px',
    	        	'shadow_vertical'                           => '0px',
        		    'shadow_blur'                               => '0px',
	    	        'shadow_spread'                             => '0px',
		            'shadow_color'                              => 'rgba(0, 0, 0, 0.1)',
					'transitions'                               => 'on',
					'resets'                                    => 'on',
					'custom_css'                                => ''
				);
				
		 return $themes;
	}
	
	add_filter( 'megamenu_themes', 'sd_default_megamenu_options');
}