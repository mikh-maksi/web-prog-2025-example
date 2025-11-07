<?php

$project_management_custom_css = '';


$project_management_is_dark_mode_enabled = get_theme_mod( 'project_management_is_dark_mode_enabled', false );  // Default is false (light mode)

if ( $project_management_is_dark_mode_enabled ) {
    // CSS for dark mode
    $project_management_custom_css .= 'body,.fixed-header,tr:nth-child(2n+2),.header-inner {';
    $project_management_custom_css .= 'background: #000;';
    $project_management_custom_css .= '}';

    $project_management_custom_css .= 'body,h1,h2,h3,h4,h5,p,#main-menu ul li a,.woocommerce .woocommerce-ordering select, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea,a,.logo span{';
    $project_management_custom_css .= 'color: #fff;';
    $project_management_custom_css .= '}';

    $project_management_custom_css .= 'a.wc-block-components-product-name, .wc-block-components-product-name,.wc-block-components-totals-footer-item .wc-block-components-totals-item__value,
.wc-block-components-totals-footer-item .wc-block-components-totals-item__label,
.wc-block-components-totals-item__label,.wc-block-components-totals-item__value,
.wc-block-components-product-metadata .wc-block-components-product-metadata__description>p,
.is-medium table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__total .wc-block-components-formatted-money-amount,
.wc-block-components-quantity-selector input.wc-block-components-quantity-selector__input,
.wc-block-components-quantity-selector .wc-block-components-quantity-selector__button,
.wc-block-components-quantity-selector,table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__quantity .wc-block-cart-item__remove-link,
.wc-block-components-product-price__value.is-discounted,del.wc-block-components-product-price__regular{';
    $project_management_custom_css .= 'color: #fff !important;';
    $project_management_custom_css .= '}';

    $project_management_custom_css .= 'h5.product-text a,#featured-product p.price,.card-header a,.comment-content.card-block p,.testimonial-box p{';
    $project_management_custom_css .= 'color: #000 !important';
    $project_management_custom_css .= '}';

	$project_management_custom_css .= '.post-box{';
    $project_management_custom_css .= '    border: 1px solid rgb(229 229 229 / 48%)';
    $project_management_custom_css .= '}';
}

	/*---------------------------text-transform-------------------*/

	$project_management_text_transform = get_theme_mod( 'menu_text_transform_project_management','CAPITALISE');
    if($project_management_text_transform == 'CAPITALISE'){

		$project_management_custom_css .='#main-menu ul li a{';

			$project_management_custom_css .='text-transform: capitalize;';

		$project_management_custom_css .='}';

	}else if($project_management_text_transform == 'UPPERCASE'){

		$project_management_custom_css .='#main-menu ul li a{';

			$project_management_custom_css .='text-transform: uppercase;';

		$project_management_custom_css .='}';

	}else if($project_management_text_transform == 'LOWERCASE'){

		$project_management_custom_css .='#main-menu ul li a{';

			$project_management_custom_css .='text-transform: lowercase;';

		$project_management_custom_css .='}';
	}

		/*---------------------------menu-zoom-------------------*/

		$project_management_menu_zoom = get_theme_mod( 'project_management_menu_zoom','None');

    if($project_management_menu_zoom == 'Zoomout'){

		$project_management_custom_css .='#main-menu ul li a{';

			$project_management_custom_css .='';

		$project_management_custom_css .='}';

	}else if($project_management_menu_zoom == 'Zoominn'){

		$project_management_custom_css .='#main-menu ul li a:hover{';

			$project_management_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: var(--first-color);';

		$project_management_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$project_management_container_width = get_theme_mod('project_management_container_width');

		$project_management_custom_css .='body, .fixed-header{';

			$project_management_custom_css .='width: '.esc_attr($project_management_container_width).'%; margin: auto';

		$project_management_custom_css .='}';

		/*---------------------------Copyright Text alignment-------------------*/

	$project_management_copyright_text_alignment = get_theme_mod( 'project_management_copyright_text_alignment','LEFT-ALIGN');

	if($project_management_copyright_text_alignment == 'LEFT-ALIGN'){

		$project_management_custom_css .='.copy-text p{';

			$project_management_custom_css .='text-align:left;';

		$project_management_custom_css .='}';


	}else if($project_management_copyright_text_alignment == 'CENTER-ALIGN'){

		$project_management_custom_css .='.copy-text p{';

			$project_management_custom_css .='text-align:center;';

		$project_management_custom_css .='}';


	}else if($project_management_copyright_text_alignment == 'RIGHT-ALIGN'){

		$project_management_custom_css .='.copy-text p{';

			$project_management_custom_css .='text-align:right;';

		$project_management_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/

$project_management_related_product_setting = get_theme_mod('project_management_related_product_setting',true);

	if($project_management_related_product_setting == false){

		$project_management_custom_css .='.related.products, .related h2{';

			$project_management_custom_css .='display: none;';

		$project_management_custom_css .='}';
	}

		/*---------------------------Scroll to Top Alignment Settings-------------------*/

		$project_management_scroll_top_position = get_theme_mod( 'project_management_scroll_top_position','Right');

		if($project_management_scroll_top_position == 'Right'){
	
			$project_management_custom_css .='.scroll-up{';
	
				$project_management_custom_css .='right: 20px;';
	
			$project_management_custom_css .='}';
	
		}else if($project_management_scroll_top_position == 'Left'){
	
			$project_management_custom_css .='.scroll-up{';
	
				$project_management_custom_css .='left: 20px;';
	
			$project_management_custom_css .='}';
	
		}else if($project_management_scroll_top_position == 'Center'){
	
			$project_management_custom_css .='.scroll-up{';
	
				$project_management_custom_css .='right: 50%;left: 50%;';
	
			$project_management_custom_css .='}';
		}
	
			/*---------------------------Pagination Settings-------------------*/
	
	
	$project_management_pagination_setting = get_theme_mod('project_management_pagination_setting',true);
	
		if($project_management_pagination_setting == false){
	
			$project_management_custom_css .='.nav-links{';
	
				$project_management_custom_css .='display: none;';
	
			$project_management_custom_css .='}';
		}

	/*---------------------------woocommerce pagination alignment settings-------------------*/

	$project_management_woocommerce_pagination_position = get_theme_mod( 'project_management_woocommerce_pagination_position','Center');

	if($project_management_woocommerce_pagination_position == 'Left'){

		$project_management_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$project_management_custom_css .='text-align: left;';

		$project_management_custom_css .='}';

	}else if($project_management_woocommerce_pagination_position == 'Center'){

		$project_management_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$project_management_custom_css .='text-align: center;';

		$project_management_custom_css .='}';

	}else if($project_management_woocommerce_pagination_position == 'Right'){

		$project_management_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$project_management_custom_css .='text-align: right;';

		$project_management_custom_css .='}';
	}

/*---------------------------Global Color-------------------*/

$project_management_first_color = get_theme_mod('project_management_first_color');

/*--- First Global Color ---*/

if ($project_management_first_color) {
  $project_management_custom_css .= ':root {';
  $project_management_custom_css .= '--first-color: ' . esc_attr($project_management_first_color) . ' !important;';
  $project_management_custom_css .= '} ';
}