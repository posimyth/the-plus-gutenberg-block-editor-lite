<?php
/**
 * TPGB Global Options
 *
 * @package TPGB
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Tpgb_Blocks_Global_Options.
 *
 * @package TPGB
 */
class Tpgb_Blocks_Global_Options {

	/**
	 * Member Variable
	 *
	 * @var instance
	 */
	private static $instance;
	
	/**
	 *  Initiator
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
	
	/**
	 * Load Global Background Options
	 *
	 * @since 1.0.0
	 */
	public static function load_bg_options() {
		
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}
		$options = [
			'globalMargin' => [
				'type' => 'object',
				'default' => (object) [ 
					'md' => [
						"top" => '',
						"bottom" => '',
						"left" => '',
						"right" => '',
					],
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}{margin: {{globalMargin}} !important;}',
					],
				],
			],
			'globalPadding' => [
				'type' => 'object',
				'default' => (object) [ 
					'md' => [
						"top" => '',
						"bottom" => '',
						"left" => '',
						"right" => '',
					],
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}{padding: {{globalPadding}};}',
					],
				],
			],
			'globalBg' => [
				'type' => 'object',
				'default' => (object) [
					'bgType' => 'color',
					'bgDefaultColor' => '',
				],
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}',
					],
				],
			],
			'globalBgHover' => [
				'type' => 'object',
				'default' => (object) [
					'bgType' => 'color',
					'bgDefaultColor' => '',
				],
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}:hover',
					],
				],
			],
			'globalBorder' => [
				'type' => 'object',
				'default' => (object) [
					'openBorder' => 0,
				],
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}',
					],
				],
			],
			'globalBorderHover' => [
				'type' => 'object',
				'default' => (object) [
					'openBorder' => 0,
				],
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}:hover',
					],
				],
			],
			'globalBRadius' => [
				'type' => 'object',
				'default' => (object) [ 
					'md' => [
						"top" => '',
						"bottom" => '',
						"left" => '',
						"right" => '',
					],
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}{border-radius: {{globalBRadius}};}',
					],
				],
			],
			'globalBRadiusHover' => [
				'type' => 'object',
				'default' => (object) [ 
					'md' => [
						"top" => '',
						"bottom" => '',
						"left" => '',
						"right" => '',
					],
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}:hover{border-radius: {{globalBRadiusHover}};}',
					],
				],
			],
			'globalBShadow' => [
				'type' => 'object',
				'default' => (object) [
					'openShadow' => 0,
					'blur' => 8,
					'color' => "rgba(0,0,0,0.40)",
					'horizontal' => 0,
					'inset' => 0,
					'spread' => 0,
					'vertical' => 4
				],
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}',
					],
				],
			],
			'globalBShadowHover' => [
				'type' => 'object',
				'default' => (object) [
					'openShadow' => 0,
					'blur' => 8,
					'color' => "rgba(0,0,0,0.40)",
					'horizontal' => 0,
					'inset' => 0,
					'spread' => 0,
					'vertical' => 4
				],
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}:hover',
					],
				],
			],
		];
		
		return $options;
	}
	
	/**
	 * Load Global Background Options
	 *
	 * @since 1.0.0
	 */
	public static function load_positioning_options() {
		
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}
		$options = [
			'globalWidth' => [
				'type' => 'string',
				'default' => '',
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'globalWidth', 'relation' => '==', 'value' => 'inline' ]],
						'selector' => '{{PLUS_BLOCK}},{{PLUS_WRAP}}{ display:inline-block;width: auto; }',
					],
				],
			],
			'globalZindex' => [
				'type' => 'string',
				'default' => '',
				'style' => [
					(object) [
						'selector' => '{{PLUS_WRAP}}{ position:relative;z-index: {{globalZindex}} !important; }',
					],
				],
			],
			
			'globalCssFilter' => [
                'type' => 'object',
				'default' => ["openFilter" => false],
				'style' => [
						(object) [
						'selector' => '{{PLUS_BLOCK}} .tpgb-cssfilters',
					],
				],
			],
			'globalHCssFilter' => [
                'type' => 'object',
				'default' => ["openFilter" => false],
				'style' => [
						(object) [
						'selector' => '{{PLUS_BLOCK}} .tpgb-cssfilters:hover',
					],
				],
			],
			'globalHideDesktop' => [
				'type' => 'boolean',
				'default' => false,
				'style' => [
					(object) [
						'selector' => '@media (min-width: 1201px){ .edit-post-visual-editor {{PLUS_WRAP}}{display: block;opacity: .5;} {{PLUS_WRAP}}{ display:none } }',
					],
				],
			],
			'globalHideTablet' => [
				'type' => 'boolean',
				'default' => false,
				'style' => [
					(object) [
						'selector' => '@media (min-width: 768px) and (max-width: 1200px){ .edit-post-visual-editor {{PLUS_WRAP}}{display: block;opacity: .5;} {{PLUS_WRAP}}{ display:none } }',
					],
				],
			],
			'globalHideMobile' => [
				'type' => 'boolean',
				'default' => false,
				'style' => [
					(object) [
						'selector' => '@media (max-width: 767px){ .edit-post-visual-editor {{PLUS_WRAP}}{display: block;opacity: .5;} {{PLUS_WRAP}}{ display:none !important; } }',
					],
				],
			],
			'globalAnim' => [
				'type' => 'object',
				'default' => [ 'md' => 'none' ],
			],
			'globalAnimDirect' => [
				'type' => 'object',
				'default' => [ 'md' => '' ],
			],
			'globalAnimDuration' => [
				'type' => 'string',
				'default' => 'normal',
			],
			'globalAnimCDuration' => [
				'type' => 'object',
				'default' => [ 'md' => '' ],
				'style' => [
					(object) [
						'selector' => '{{PLUS_BLOCK}}.tpgb_animated.tpgb-anim-dur-custom{-webkit-animation-duration: {{globalAnimCDuration}}s;animation-duration: {{globalAnimCDuration}}s;}',
					],
				],
			],
			'globalAnimDelay' => [
				'type' => 'object',
				'default' => [ 'md' => '' ],
				'style' => [
					(object) [
						'selector' => '{{PLUS_BLOCK}}.tpgb-view-animation{-webkit-animation-delay: {{globalAnimDelay}}s;animation-delay: {{globalAnimDelay}}s;}',
					],
				],
			],
			'globalAnimEasing' => [
				'type' => 'string',
				'default' => '',
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'globalAnimEasing', 'relation' => '!=', 'value' => 'custom' ]],
						'selector' => '{{PLUS_BLOCK}}.tpgb-view-animation{animation-timing-function: {{globalAnimEasing}};}',
					],
				],
			],
			'globalAnimEasCustom' => [
				'type' => 'string',
				'default' => '',
				'style' => [
					(object) [
						'selector' => '{{PLUS_BLOCK}}.tpgb-view-animation{animation-timing-function: {{globalAnimEasCustom}};}',
					],
				],
			],
			
			'globalAnimOut' => [
				'type' => 'object',
				'default' => [ 'md' => 'none' ],
			],
			'globalAnimDirectOut' => [
				'type' => 'object',
				'default' => [ 'md' => '' ],
			],
			'globalAnimDurationOut' => [
				'type' => 'string',
				'default' => 'normal',
			],
			'globalAnimCDurationOut' => [
				'type' => 'object',
				'default' => [ 'md' => '' ],
				'style' => [
					(object) [
						'selector' => '{{PLUS_BLOCK}}.tpgb_animated_out.tpgb-anim-out-dur-custom{-webkit-animation-duration: {{globalAnimCDurationOut}}s;animation-duration: {{globalAnimCDurationOut}}s;}',
					],
				],
			],
			'globalAnimDelayOut' => [
				'type' => 'object',
				'default' => [ 'md' => '' ],
				'style' => [
					(object) [
						'selector' => '{{PLUS_BLOCK}}.tpgb-view-animation-out{-webkit-animation-delay: {{globalAnimDelayOut}}s;animation-delay: {{globalAnimDelayOut}}s;}',
					],
				],
			],
			'globalAnimEasingOut' => [
				'type' => 'string',
				'default' => '',
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'globalAnimEasingOut', 'relation' => '!=', 'value' => 'custom' ]],
						'selector' => '{{PLUS_BLOCK}}.tpgb-view-animation-out{animation-timing-function: {{globalAnimEasingOut}};}',
					],
				],
			],
			'globalAnimEasCustomOut' => [
				'type' => 'string',
				'default' => '',
				'style' => [
					(object) [
						'selector' => '{{PLUS_BLOCK}}.tpgb-view-animation-out{animation-timing-function: {{globalAnimEasCustomOut}};}',
					],
				],
			],
		];
		
		return $options;
	}
	
	/**
	 * Load Global Background Options
	 *
	 * @since 1.0.0
	 */
	public static function load_plusextras_options() {
		
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}
		$options = [
			'contentHoverEffect' => [
				'type' => 'boolean',
				'default' => false,	
			],
			'selectHoverEffect' => [
				'type' => 'string',
				'default' => '',	
			],
			
			'contentHoverColor' => [
				'type' => 'string',
				'default' => '',
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'contentHoverEffect', 'relation' => '==', 'value' => true ],
							['key' => 'selectHoverEffect', 'relation' => '==', 'value' => 'float_shadow' ]],
						'selector' => '{{PLUS_WRAP}}.tpgb_cnt_hvr_effect.cnt_hvr_float_shadow:before{background: -webkit-radial-gradient(center, ellipse, {{contentHoverColor}} 0%, rgba(60, 60, 60, 0) 70%);background: radial-gradient(ellipse at 50% 150%,{{contentHoverColor}} 0%, rgba(60, 60, 60, 0) 70%); }',
					],
					(object) [
						'condition' => [(object) ['key' => 'contentHoverEffect', 'relation' => '==', 'value' => true ],
							['key' => 'selectHoverEffect', 'relation' => '==', 'value' => 'grow_shadow' ]],
						'selector' => '{{PLUS_WRAP}}.tpgb_cnt_hvr_effect.cnt_hvr_grow_shadow:hover {-webkit-box-shadow: 0 10px 10px -10px {{contentHoverColor}};-moz-box-shadow: 0 10px 10px -10px {{contentHoverColor}};box-shadow: 0 10px 10px -10px {{contentHoverColor}};}',
					],
					(object) [
						'condition' => [(object) ['key' => 'contentHoverEffect', 'relation' => '==', 'value' => true ],
							['key' => 'selectHoverEffect', 'relation' => '==', 'value' => 'shadow_radial' ]],
						'selector' => '{{PLUS_WRAP}}.tpgb_cnt_hvr_effect.cnt_hvr_shadow_radial:before{background: -webkit-radial-gradient(center, ellipse at 50% 150%, {{contentHoverColor}} 0%, rgba(60, 60, 60, 0) 70%);background: radial-gradient(ellipse at 50% 150%,{{contentHoverColor}} 0%, rgba(60, 60, 60, 0) 70%); }{{PLUS_WRAP}}.tpgb_cnt_hvr_effect.cnt_hvr_shadow_radial:after {background: -webkit-radial-gradient(50% -50%, ellipse, {{contentHoverColor}} 0%, rgba(0, 0, 0, 0) 80%);background: radial-gradient(ellipse at 50% -50%, {{contentHoverColor}} 0%, rgba(0, 0, 0, 0) 80%);}',
					],
				],
			],
			'Plus3DTilt' => [
				'type' => 'object',
				'default' => [],	
			],
			'PlusMouseParallax' => [
				'type' => 'object',
				'default' => [],	
			],
		];
		
		return $options;
	}
	
	/**
	 * Load Global Background Options
	 *
	 * @since 1.0.0
	 */
	public static function load_plusButton_options() {
		
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}
		$options = [
			'extBtnshow' => [
				'type' => 'boolean',
				'default' => false,	
			],
			'extBtnStyle' => [
				'type' => 'string',
				'default' => 'style-7',	
			],
			'extBtnText' => [
				'type' => 'string',
				'default' => 'Have a Look',	
			],
			'extBtnUrl' => [
				'type'=> 'object',
				'default'=> [
					'url' => '#',
					'target' => '',
					'nofollow' => ''
				],
			],
			'extBtniconFont'  => [
				'type' => 'string' ,
				'default' => 'none',	
			],
			
			'extBtniconName' => [
				'type'=> 'string',
				'default'=> '',
			],
			'extBtniconPosition' => [
				'type'=> 'string',
				'default'=> 'after',
			],
			'extBtniconSpacing' => [
				'type' => 'object',
				'default' => [ 
					'md' => 5,
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true]],
						'selector' => '{{PLUS_WRAP}} .button-link-wrap .button-before { margin-right: {{extBtniconSpacing}}; } {{PLUS_WRAP}} .button-link-wrap .button-after { margin-left: {{extBtniconSpacing}}; }',
					],
				],
			],
			'extBtniconSize' => [
				'type' => 'object',
				'default' => [ 
					'md' => '',
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true]],
						'selector' => '{{PLUS_WRAP}} .button-link-wrap .btn-icon { font-size: {{extBtniconSize}}; }',
					],
				],
			],
			'extbtnSpace' => [
				'type' => 'object',
				'default' => (object) [ 
					'md' => '',
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button{ margin-top: {{extbtnSpace}}; }',
					],
				],
			],
			'extbtnbottomSpace' => [
				'type' => 'object',
				'default' => (object) [ 
					'md' => '',
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button{ margin-bottom : {{extbtnbottomSpace}}; }',
					],
				],
			],
			'extbtnPadding' => [
				'type' => 'object',
				'default' => (object) [ 
					'md' => [
						"top" => '',
						"right" => '',
						"bottom" => '',
						"left" => '',
					],
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' =>true]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button.button-style-8 .button-link-wrap{ padding: {{extbtnPadding}}; }',
					],
				],
			],
			'extbtnTypo' => [
				'type'=> 'object',
				'default'=> (object) [
					'openTypography' => 0,
					'size' => [ 'md' => '', 'unit' => 'px' ],
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button .button-link-wrap',
					],
				],
			],
			'extbtnTextColor' => [
				'type' => 'string',
				'default' => '',
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button .button-link-wrap{ color: {{extbtnTextColor}}; }',
					],
					(object) [
						'condition' => [
							(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true ],
							['key' => 'extBtnStyle', 'relation' => '==', 'value' => 'style-7']
						],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button.button-style-7 .button-link-wrap:after{ border-color: {{extbtnTextColor}}; }',
					],
				],
			],
			'extbtnThoverColor' => [
				'type' => 'string',
				'default' => '',
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' =>  true]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button .button-link-wrap:hover{ color: {{extbtnThoverColor}}; }',
					],
				],
			],
			'extbtnNormalB' => [
				'type' => 'object',
				'default' => (object) [
					'openBorder' => 0,
					'type' => '',
						'color' => '',
					'width' => (object) [
						'md' => (object)[
							'top' => '1',
							'left' => '1',
							'bottom' => '1',
							'right' => '1',
						],
						"unit" => "px",
					],			
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true ], ['key' => 'extBtnStyle', 'relation' => '==', 'value' => 'style-8' ]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button.button-style-8 .button-link-wrap',
					],
				],
			],
			'extbtnBRadius' => [
				'type' => 'object',
				'default' => (object) [ 
					'md' => [
						"top" => '',
						"right" => '',
						"bottom" => '',
						"left" => '',
					],
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true ], ['key' => 'extBtnStyle', 'relation' => '==', 'value' => 'style-8' ]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button.button-style-8 .button-link-wrap{border-radius: {{extbtnBRadius}};}',
					],
				],
			],
			'extbtnBG' => [
				'type' => 'object',
				'default' => (object) [
					'openBg'=> 0,
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true ], ['key' => 'extBtnStyle', 'relation' => '==', 'value' => 'style-8' ]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button.button-style-8 .button-link-wrap',
					],
				],
			],
			'extbtnHvrB' => [
				'type' => 'object',
				'default' => (object) [
					'openBorder' => 0,
					'type' => '',
						'color' => '',
					'width' => (object) [
						'md' => (object)[
							'top' => '1',
							'left' => '1',
							'bottom' => '1',
							'right' => '1',
						],
						"unit" => "px",
					],			
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true ], ['key' => 'extBtnStyle', 'relation' => '==', 'value' => 'style-8' ]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button.button-style-8 .button-link-wrap:hover',
					],
				],
			],
			'extbtnHvrBRadius' => [
				'type' => 'object',
				'default' => (object) [ 
					'md' => [
						"top" => '',
						"right" => '',
						"bottom" => '',
						"left" => '',
					],
					"unit" => 'px',
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true ], ['key' => 'extBtnStyle', 'relation' => '==', 'value' => 'style-8' ]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button.button-style-8 .button-link-wrap:hover{border-radius: {{extbtnHvrBRadius}};}',
					],
				],
			],
			'extbtnHvrBG' => [
				'type' => 'object',
				'default' => (object) [
					'openBg'=> 0,
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true ], ['key' => 'extBtnStyle', 'relation' => '==', 'value' => 'style-8' ]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button.button-style-8 .button-link-wrap:hover',
					],
				],
			],
			'extbtnShadow' => [
				'type' => 'object',
				'default' => (object) [
					'horizontal' => 0,
					'vertical' => 8,
					'blur' => 20,
					'spread' => 1,
					'color' => "rgba(0,0,0,0.27)",
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button .button-link-wrap',
					],
				],
			],
			'hoverextbtnShadow' => [
				'type' => 'object',
				'default' => (object) [
					'horizontal' => '',
					'vertical' => '',
					'blur' => '',
					'spread' => '',
					'color' => "rgba(0,0,0,0.27)",
				],
				'style' => [
					(object) [
						'condition' => [(object) ['key' => 'extBtnshow', 'relation' => '==', 'value' => true]],
						'selector' => '{{PLUS_WRAP}} .tpgb-adv-button .button-link-wrap:hover',
					],
				],
			],
	];
		
		return $options;
	}

	public static function load_plusButton_saves($attributes) {
		
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}
		if(empty($attributes)){
			return;
		}
		$extBtnshow = (!empty($attributes['extBtnshow'])) ? $attributes['extBtnshow'] : false;
		$extBtnStyle = (!empty($attributes['extBtnStyle'])) ? $attributes['extBtnStyle'] : 'style-8';
		$extBtnText = (!empty($attributes['extBtnText'])) ? $attributes['extBtnText'] : 'Read More';
		$extBtnUrl = (!empty($attributes['extBtnUrl'])) ? $attributes['extBtnUrl'] : '';
		$extBtniconFont = (!empty($attributes['extBtniconFont'])) ? $attributes['extBtniconFont'] : '';
		$extBtniconName = (!empty($attributes['extBtniconName'])) ? $attributes['extBtniconName'] : '';
		$extBtniconPosition = (!empty($attributes['extBtniconPosition'])) ? $attributes['extBtniconPosition'] : 'after';
		$IBoxLinkTgl = (!empty($attributes['IBoxLinkTgl'])) ? $attributes['IBoxLinkTgl'] : false;
		
			$output ='';
			$output .='<div class="tpgb-adv-button button-'.esc_attr($extBtnStyle).'">';
				if(!empty($IBoxLinkTgl)){
					$output .= '<div class="button-link-wrap">';
				}else{
					$output .= '<a class="button-link-wrap"  href="'.(!empty($extBtnUrl['url']) ? $extBtnUrl['url']  : '').'" target="'.(!empty($extBtnUrl['target']) ? '_blank' : '').'">';
				}
					if($extBtnStyle == 'style-8'){
						if($extBtniconPosition == 'before'){
							(($extBtniconFont == 'font_awesome' && !empty($extBtniconName)  ) ? $output .= '<span class="btn-icon button-'.esc_attr($extBtniconPosition).'"><i class="'.esc_attr($extBtniconName).' "></i></span>' : '');
							$output .= esc_html($extBtnText);
						}else{
							$output .= esc_html($extBtnText);
							(($extBtniconFont == 'font_awesome' && !empty($extBtniconName)) ? $output .= '<span class="btn-icon button-'.esc_attr($extBtniconPosition).'"><i class="'.esc_attr($extBtniconName).' "></i></span>' : '');
						}
					}else{
						$output .= esc_html($extBtnText);
						$output .= '<span class="button-arrow"> ';
							if($extBtnStyle == 'style-7'){
								$output .= '<span class="btn-right-arrow"><i class="fas fa-chevron-right"></i></span>';
							}
							if($extBtnStyle == 'style-9'){
								$output .= '<i class="btn-show fa fa-chevron-right" aria-hidden="true"></i>';
								$output .= '<i class="btn-hide fa fa-chevron-right" aria-hidden="true"></i>';
							}
						$output .= '</span>';
					}
				if(!empty($IBoxLinkTgl)){
					$output .= '</div>';
				}else{
					$output .= '</a>';
				}
			$output .='</div>';

		return $output;
	}
	
	public static function tpgbAnimationDevice($globalAnim='', $AnimDirect='',$device=''){
		$animationVal = '';
		if($globalAnim=='fadeIn'){
			$animationVal .= (($AnimDirect[$device]==='' || $AnimDirect[$device]==='default') ? 'fadeIn' : 'fadeIn'.$AnimDirect[$device]);
		}else if($globalAnim=='slideIn'){
			$animationVal .= (($AnimDirect[$device]==='' || $AnimDirect[$device]==='default') ? 'slideInDown' : 'slideIn'.$AnimDirect[$device]);
		}else if($globalAnim=='zoomIn'){
			$animationVal .= (($AnimDirect[$device]==='' || $AnimDirect[$device]==='default') ? 'zoomIn' : 'zoomIn'.$AnimDirect[$device]);
		}else if($globalAnim=='rotateIn'){
			$animationVal .= (($AnimDirect[$device]==='' || $AnimDirect[$device]==='default') ? 'rotateIn' : 'rotateIn'.$AnimDirect[$device]);
		}else if($globalAnim=='flipIn'){
			$animationVal .= (($AnimDirect[$device]==='' || $AnimDirect[$device]==='default') ? 'flipInX' : 'flipIn'.$AnimDirect[$device]);
		}else if($globalAnim=='lightSpeedIn'){
			$animationVal .= (($AnimDirect[$device]==='' || $AnimDirect[$device]==='default') ? 'lightSpeedInLeft' : 'lightSpeedIn'.$AnimDirect[$device]);
		}else if($globalAnim=='seekers'){
			$animationVal .= (($AnimDirect[$device]==='' || $AnimDirect[$device]==='default') ? 'bounce' : $AnimDirect[$device]);
		}else if($globalAnim=='rollIn'){
			$animationVal .= 'rollIn';
		}
		
		return $animationVal;
	}
	
	public static function block_Wrap_Render($attributes, $content=''){
	
			if ( ! function_exists( 'register_block_type' ) ) {
				return $content;
			}
			if(empty($attributes) || empty($attributes['block_id']) || empty($content)){
				return $content;
			}
			$attributes = json_decode(json_encode($attributes), true);
			
			
			$filterEffect = false;
			if((!empty($attributes['globalCssFilter']) && !empty($attributes['globalCssFilter']['openFilter'])) || (!empty($attributes['globalHCssFilter']['openFilter']) && !empty($attributes['globalHCssFilter']))){
				$filterEffect = true;
			}
			
			$Plus3DTilt = false;
			$tiltSetting = [];
			
			
			$PlusMouseParallax = false;
			
			
			$animationEffect = false;
			$animClass = $animAttr = $animDesktop = $animTablet = $animMobile = '';
			$animSettings = [];
			if( (!empty($attributes['globalAnim'])) ){
				if(!empty($attributes['globalAnim']['md']) && $attributes['globalAnim']['md']!='none'){
					$animationEffect = true;
					$globalAnim = $attributes['globalAnim']['md'];
					if( !empty($attributes['globalAnimDirect']) ){
						$animDesktop = self::tpgbAnimationDevice($globalAnim, $attributes['globalAnimDirect'], 'md');
					}
				}
				
				if(!empty($attributes['globalAnim']['sm']) && $attributes['globalAnim']['sm']!='none'){
					$animationEffect = true;
					$globalAnim = $attributes['globalAnim']['sm'];
					if( !empty($attributes['globalAnimDirect']) ){
						$animTablet = self::tpgbAnimationDevice($globalAnim, $attributes['globalAnimDirect'], 'sm');
					}
				}
				
				if(!empty($attributes['globalAnim']['xs']) && $attributes['globalAnim']['xs']!='none'){
					$animationEffect = true;
					$globalAnim = $attributes['globalAnim']['xs'];
					if( !empty($attributes['globalAnimDirect']) ){
						$animMobile = self::tpgbAnimationDevice($globalAnim, $attributes['globalAnimDirect'], 'xs');
					}
				}
				
				if(!empty($animationEffect)){
					$animClass .= ' tpgb-view-animation';
					
					if(!empty($attributes['globalAnimDuration']) && $attributes['globalAnimDuration']=='custom'){
						$animClass .= ' tpgb-anim-dur-custom';
					}else if(!empty($attributes['globalAnimDuration'])){
						$animClass .= ' tpgb-anim-dur-'.esc_attr($attributes['globalAnimDuration']);
					}
					
					$animSettings['anime']['md'] = !empty($animDesktop) ? $animDesktop : '';
					$animSettings['anime']['sm'] = !empty($animTablet) ? $animTablet : '';
					$animSettings['anime']['xs'] = !empty($animMobile) ? $animMobile : '';
				}
			}
			
			$animationOutEffect = false;
			$animOutDesktop = $animOutTablet = $animOutMobile = '';
			
			if(!empty($animationEffect) || !empty($animationOutEffect)){
				$animAttr .= 'data-animationSetting=\'' .htmlspecialchars(json_encode($animSettings), ENT_QUOTES, 'UTF-8'). '\'';
			}
			
			$outputWrap = '';
			if(!empty($animationEffect) || !empty($animationOutEffect) || !empty($filterEffect)  || !empty($Plus3DTilt) || !empty($PlusMouseParallax) ){
				
				$outputWrap .= '<div class="tpgb-wrap-'.esc_attr($attributes['block_id']).' '.esc_attr($animClass).'" '.$animAttr.' >';
					
					$outputWrap .= $content;
					
				$outputWrap .= '</div>';
				
			}else{
				$outputWrap .= $content;
			}
			
		return $outputWrap;
	}
}

Tpgb_Blocks_Global_Options::get_instance();