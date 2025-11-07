<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>
    <script defer src="https://cdn.jsdelivr.net/npm/mathjax@4/tex-chtml.js">
        </script>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'project-management' ); ?></a>

<?php if(get_theme_mod('project_management_site_loader',false)!= ''){ ?>
    <?php if(get_theme_mod( 'project_management_preloader_type','four-way-loader') == 'four-way-loader'){ ?>
	    <div class="cssloader">
	    	<div class="sh1"></div>
	    	<div class="sh2"></div>
	    	<h1 class="lt"><?php esc_html_e( 'loading',  'project-management' ); ?></h1>
	    </div>
    <?php }else if(get_theme_mod( 'project_management_preloader_type') == 'cube-loader') {?>
		<div class="cssloader">
    		<div class="loader-main ">
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
			</div>
    	</div>
    <?php }?>
<?php }?>

<div class="<?php if( get_theme_mod( 'project_management_sticky_header', false) != '') { ?>sticky-header<?php } else { ?>close-sticky main-menus<?php } ?>">
	<header id="site-navigationn">
		<div class="container">
			<div class="header-inner wow fadeInDown">
				<div class="row">
					<div class="col-lg-2 col-md-12 align-self-center">
						<div class="logo text-center text-lg-start">
				    		<div class="logo-image">
				    			<?php the_custom_logo(); ?>
					    	</div>
					    	<div class="logo-content">
						    	<?php
						    		if ( get_theme_mod('project_management_display_header_title', true) == true ) :
							      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
							      			echo esc_html(get_bloginfo('name'));
							      		echo '</a>';
							      	endif;

							      	if ( get_theme_mod('project_management_display_header_text', false) == true ) :
						      			echo '<span>'. esc_html(get_bloginfo('description')) . '</span>';
						      		endif;
					    		?>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-9 col-3 align-self-center text-center">
							<div class="top-menu-wrapper">
							    <div class="navigation_header">
							        <div class="toggle-nav mobile-menu">
							            <button onclick="project_management_openNav()">
							                <span class="dashicons dashicons-menu"></span>
							            </button>
							        </div>
							        <div id="mySidenav" class="nav sidenav">
							            <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e( 'Top Menu', 'project-management' ); ?>">
							                <?php {
							                    wp_nav_menu(
							                        array(
							                            'theme_location' => 'main-menu',
							                            'container_class' => 'navi clearfix navbar-nav',
							                            'menu_class'     => 'menu clearfix',
							                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							                            'fallback_cb'    => 'wp_page_menu',
							                        )
							                    );
							                } ?>
							            </nav>
							            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="project_management_closeNav()">
							                <span class="dashicons dashicons-no"></span>
							            </a>
							        </div>
							    </div>
							</div>
					</div>
					<div class="col-lg-2 col-md-3 col-9 text-center text-md-end align-self-center">
						<?php if ( get_theme_mod('project_management_header_button') ) : ?>
				    		<p class="get-started-btn my-3 my-md-0"><a href="<?php echo esc_url(get_theme_mod('project_management_header_button'));?>"><?php esc_html_e('Get Started','project-management'); ?></a></p>
				    	<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>