<?php
/**
* Get started notice
*/
add_action( 'wp_ajax_project_management_dismissed_notice_handler', 'project_management_ajax_notice_handler' );

function project_management_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function project_management_deprecated_hook_admin_notice() {
    // Check if it's been dismissed...
    if ( ! get_option( 'dismissed-get_started', false ) ) {
        $current_screen = get_current_screen();

        // Check screen ID correctly
        if ( 
            $current_screen && 
            $current_screen->id !== 'appearance_page_project-management-guide-page' &&
            $current_screen->id !== 'appearance_page_projectmanagement-wizard'
        ) {
            $project_management_comments_theme = wp_get_theme();
            ?>
            <div class="project-management-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
                <div class="project-management-notice">
                    <div class="project-management-notice-content">
                        <div class="project-management-notice-heading">
                            <h2>
                                <?php esc_html_e('Thanks For Installing ', 'project-management'); ?>
                                <?php echo esc_html( $project_management_comments_theme ); ?>
                                <?php esc_html_e('Theme', 'project-management'); ?>
                            </h2>
                            <p>
                                <?php
                                /* translators: %s: theme name */
                                printf(
                                    esc_html__("%s is now installed and ready to use. We've provided some links to get you started.", 'project-management'),
                                    $project_management_comments_theme
                                );
                                ?>
                            </p>
                        </div>
                        <div class="diplay-flex-btn">
                            <a class="button button-primary" href="<?php echo esc_url( admin_url( 'themes.php?page=project-management-guide-page' ) ); ?>">
                                <?php echo esc_html__('GET STARTED', 'project-management'); ?>
                            </a>
                            <a class="button button-primary" target="_blank" href="<?php echo esc_url( PROJECT_MANAGEMENT_BUY_NOW ); ?>">
                                <?php echo esc_html__('GO TO PREMIUM', 'project-management'); ?>
                            </a>
                            <a class="button button-primary import" href="<?php echo esc_url( admin_url( 'themes.php?page=projectmanagement-wizard' ) ); ?>">
                                <?php echo esc_html__('ONE CLICK DEMO IMPORTER', 'project-management'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="project-management-notice-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/notification.png' ); ?>" alt="<?php esc_attr_e('logo', 'project-management'); ?>">
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
add_action( 'admin_notices', 'project_management_deprecated_hook_admin_notice' );


add_action( 'admin_menu', 'project_management_getting_started' );
function project_management_getting_started() {
	add_theme_page( esc_html__('Get Started', 'project-management'), esc_html__('Get Started', 'project-management'), 'edit_theme_options', 'project-management-guide-page', 'project_management_test_guide');	
}

function project_management_admin_enqueue_scripts() {
	wp_enqueue_style( 'project-management-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'project-management-admin-script', get_template_directory_uri() . '/js/project-management-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'project-management-admin-script', 'project_management_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'project_management_admin_enqueue_scripts' );


if ( ! defined( 'PROJECT_MANAGEMENT_DOCS_FREE' ) ) {
define('PROJECT_MANAGEMENT_DOCS_FREE',__('https://demo.misbahwp.com/docs/project-management-free-docs/','project-management'));
}
 if ( ! defined( 'PROJECT_MANAGEMENT_DOCS_PRO' ) ) {
define('PROJECT_MANAGEMENT_DOCS_PRO',__('https://demo.misbahwp.com/docs/project-management-pro-docs/','project-management'));
}
if ( ! defined( 'PROJECT_MANAGEMENT_BUY_NOW' ) ) {
define('PROJECT_MANAGEMENT_BUY_NOW',__('https://www.misbahwp.com/products/project-management-wordpress-theme','project-management'));
}
if ( ! defined( 'PROJECT_MANAGEMENT_SUPPORT_FREE' ) ) {
define('PROJECT_MANAGEMENT_SUPPORT_FREE',__('https://wordpress.org/support/theme/project-management','project-management'));
}
if ( ! defined( 'PROJECT_MANAGEMENT_REVIEW_FREE' ) ) {
define('PROJECT_MANAGEMENT_REVIEW_FREE',__('https://wordpress.org/support/theme/project-management/reviews/#new-post','project-management'));
}
if ( ! defined( 'PROJECT_MANAGEMENT_DEMO_PRO' ) ) {
define('PROJECT_MANAGEMENT_DEMO_PRO',__('https://demo.misbahwp.com/project-management/','project-management'));
}
if( ! defined( 'PROJECT_MANAGEMENT_THEME_BUNDLE' ) ) {
define('PROJECT_MANAGEMENT_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','project-management'));
}

function project_management_test_guide() { 
	$project_management_theme = wp_get_theme(); ?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( PROJECT_MANAGEMENT_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'project-management' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'project-management' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( PROJECT_MANAGEMENT_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'project-management' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( PROJECT_MANAGEMENT_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'project-management' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','project-management'); ?><?php echo esc_html( $project_management_theme ); ?>  <span><?php esc_html_e('Version: ', 'project-management'); ?><?php echo esc_html($project_management_theme['Version']);?></span></h3>
				<div class="demo-import-box">
					<h4><?php echo esc_html__('Import homepage demo in just one click.','project-management'); ?></h4>
					<p><?php echo esc_html__('Get started with the wordpress theme installation','project-management'); ?></p>
					<a class="button button-primary import" href="themes.php?page=projectmanagement-wizard"><?php echo esc_html__('ONE CLICK DEMO IMPORTER','project-management'); ?></a>
				</div>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $project_management_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$project_management_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $project_management_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="volleyball-postboxx">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'project-management' ); ?></h3>
				<div class="volleyball-insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','project-management'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( PROJECT_MANAGEMENT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'project-management' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( PROJECT_MANAGEMENT_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'project-management' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( PROJECT_MANAGEMENT_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'project-management' ) ?></a>
					</div>
				</div>

				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'project-management' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 90+ Perfect WordPress Theme In A Single Package at just $89."','project-management'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 90+ WordPress Themes At 15% Off','project-management'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','project-management'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( PROJECT_MANAGEMENT_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'project-management' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','project-management'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','project-management'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','project-management'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','project-management'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>
<?php } ?>