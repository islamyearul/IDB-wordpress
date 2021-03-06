<?php

if ( ! function_exists( 'techmarket_products_carousel_vertical_tabs_element' ) ) {

	function techmarket_products_carousel_vertical_tabs_element( $atts, $content = null ){

		extract(shortcode_atts(array(
			'tabs'				=> array(),
			'section_title'		=> '',
			'bg_image'			=> '',
			'ca_infinite'		=> false,
			'ca_rows'			=> 1,
			'ca_slidesperrow'	=> 1,
			'ca_slidestoshow'	=> 6,
			'ca_slidestoscroll'	=> 6,
			'ca_dots'			=> false,
			'ca_arrows'			=> false,
			'ca_prevarrow'		=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'ca_nextarrow'		=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'ca_responsive'		=> array(),
			'el_class'			=> ''
		), $atts));

		if( is_object( $tabs ) || is_array( $tabs ) ) {
			$tabs = json_decode( json_encode( $tabs ), true );
		} else {
			$tabs = json_decode( urldecode( $tabs ), true );
		}

		$tabs_args = array();
		
		if( is_array( $tabs ) ) {
			foreach ( $tabs as $key => $tab ) {

				extract(shortcode_atts(array(
					'title'				=> '',
					'shortcode_tag'		=> 'recent_products',
					'per_page' 			=> 2,
					'orderby' 			=> 'date',
					'order' 			=> 'desc',
					'template'			=> 'content-product',
					'product_id'		=> '',
					'category'			=> '',
				), $tab));
				
				$shortcode_atts = function_exists( 'techmarket_get_atts_for_shortcode' ) ? techmarket_get_atts_for_shortcode( array( 'shortcode' => $shortcode_tag, 'product_category_slug' => $category, 'products_choice' => 'ids', 'products_ids_skus' => $product_id ) ) : array();

				$tabs_args[] = array(
					'title'				=> $title,
					'shortcode_tag'		=> $shortcode_tag,
					'shortcode_atts'	=> wp_parse_args( $shortcode_atts, array( 'order' => $order, 'orderby' => $orderby, 'columns' => $ca_slidestoshow, 'per_page' => $per_page, 'template' => $template ) ),
				);
			}
		}

		$args = array(
			'section_title'		=> $section_title,
			'section_class'		=> $el_class,
			'bg_image'			=> isset( $bg_image ) && intval( $bg_image ) ? wp_get_attachment_image_src( $bg_image, 'full' ) : '',
			'tabs' 				=> $tabs_args,
			'carousel_args'		=> array(
				'infinite'			=> filter_var( $ca_infinite, FILTER_VALIDATE_BOOLEAN ),
				'rows'				=> intval( $ca_rows ),
				'slidesPerRow'		=> intval( $ca_slidesperrow ),
				'slidesToShow'		=> intval( $ca_slidestoshow ),
				'slidesToScroll'	=> intval( $ca_slidestoscroll ),
				'dots'				=> filter_var( $ca_dots, FILTER_VALIDATE_BOOLEAN ),
				'arrows'			=> filter_var( $ca_arrows, FILTER_VALIDATE_BOOLEAN ),
				'prevArrow'			=> $ca_prevarrow,
				'nextArrow'			=> $ca_nextarrow
			),
		);

		if( is_object( $ca_responsive ) || is_array( $ca_responsive ) ) {
			$ca_responsive = json_decode( json_encode( $ca_responsive ), true );
		} else {
			$ca_responsive = json_decode( urldecode( $ca_responsive ), true );
		}

		if( ! empty( $ca_responsive ) ) {
			$responsive_args = array();
			
			foreach ( $ca_responsive as $key => $responsive ) {

				extract(shortcode_atts(array(
					'ca_res_breakpoint'			=> 767,
					'ca_res_slidesperrow'		=> 1,
					'ca_res_slidestoshow'		=> 1,
					'ca_res_slidestoscroll'		=> 1,
				), $responsive));

				$responsive_args[] = array(
					'breakpoint'	=> $ca_res_breakpoint,
					'settings'		=> array(
						'slidesPerRow'		=> intval( $ca_res_slidesperrow ) > 0 ? intval( $ca_res_slidesperrow ) : 1,
						'slidesToShow'		=> intval( $ca_res_slidestoshow ) > 0 ? intval( $ca_res_slidestoshow ) : 1,
						'slidesToScroll'	=> intval( $ca_res_slidestoscroll ) > 0 ? intval( $ca_res_slidestoscroll ) : 1,
					),
				);
			}

			$args['carousel_args']['responsive'] = $responsive_args;
		}

		$html = '';
		if( function_exists( 'techmarket_products_carousel_vertical_tabs' ) ) {
			ob_start();
			techmarket_products_carousel_vertical_tabs( $args );
			$html = ob_get_clean();
		}

		return $html;
	}

}

add_shortcode( 'techmarket_products_carousel_vertical_tabs' , 'techmarket_products_carousel_vertical_tabs_element' );