<?php if ( get_theme_mod('project_management_blog_box_enable',false) ) : ?>

<?php $project_management_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('project_management_blog_slide_category'),
  'posts_per_page' => get_theme_mod('project_management_blog_slide_number'),
); ?>

<div class="slider pb-5">
  <div class="slider-inner-banner">
    <?php if ( get_theme_mod('project_management_slider_banner_image') ) : ?>
      <img class="inner-banner" src="<?php echo esc_url(get_theme_mod('project_management_slider_banner_image'));?>">
    <?php else: ?>
      <div class="slider-alternate">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/slider1.png'; ?>">
      </div>
    <?php endif; ?>
    <div class="owl-carousel slider-owl-position">
      <?php $project_management_arr_posts = new WP_Query( $project_management_args );
      if ( $project_management_arr_posts->have_posts() ) :
        while ( $project_management_arr_posts->have_posts() ) :
          $project_management_arr_posts->the_post();
          ?>
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-md-6 align-self-center">
                <div class="blog_box_inner wow fadeInLeft">
                  <h3><?php the_title(); ?></h3>
                  <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                  <p class="slider-button mt-5">
                    <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Subscribe','project-management'); ?></a>
                  </p>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 align-self-center">
                <div class="blog_inner_box wow fadeInRight">
                  <span>
                    <?php
                      if ( has_post_thumbnail() ) { ?>
                        <div class="slider-default-image">
                          <?php the_post_thumbnail(); ?>
                        </div>
                      <?php } else { ?>
                        <div class="slider-default-image">
                          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/slider.png'; ?>">
                        </div>
                    <?php } ?>
                  </span>
                </div>
              </div>
            </div>
          </div>
        <?php
      endwhile;
      wp_reset_postdata();
      endif; ?>
    </div>
  </div>
</div>

<?php endif; ?>