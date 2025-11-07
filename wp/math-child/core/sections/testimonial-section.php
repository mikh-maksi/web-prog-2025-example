<?php if ( get_theme_mod('project_management_testimonial_section_enable',false) ) : ?>

	<div id="testimonial" class="py-5">
		<div class="container">
	    <div class="row">
	    	<div class="col-lg-4 col-md-4 align-self-center">
	    		<div class="testimonial-heading wow fadeInLeft">
		    		<?php if ( get_theme_mod('project_management_testimonial_heading_text') ) : ?>
		    			<p><?php echo esc_html(get_theme_mod('project_management_testimonial_heading_text'));?></p>
		    		<?php endif; ?>
		    		<?php if ( get_theme_mod('project_management_testimonial_heading') ) : ?>
		    			<h3><?php echo esc_html(get_theme_mod('project_management_testimonial_heading'));?></h3>
		    		<?php endif; ?>
		    	</div>
	    	</div>
	    	<div class="col-lg-8 col-md-8 align-self-center">
	    		<div class="owl-carousel">
					<?php $project_management_testimonial_count = get_theme_mod('project_management_testimonial_count'); 
        			for ($i=1; $i <= $project_management_testimonial_count; $i++) { ?>
        				<div class="testimonial-box wow fadeInDown">
        					<div class="testimonial-image">
    							<?php if ( get_theme_mod('project_management_testimonial_image'.$i) ) : ?>
	                    			<img src="<?php echo esc_url( get_theme_mod('project_management_testimonial_image'.$i ) ); ?>">
	                  			<?php endif; ?>
        					</div>
	                  		<?php if ( get_theme_mod('project_management_testimonial_text'.$i) ) : ?>
	                    		<p><?php echo esc_html( get_theme_mod('project_management_testimonial_text'.$i ) ); ?></p>
	                  		<?php endif; ?>
	                  		<?php if ( get_theme_mod('project_management_testimonial_name'.$i) ) : ?>
	                    		<h4><?php echo esc_html( get_theme_mod('project_management_testimonial_name'.$i ) ); ?></h4>
	                  		<?php endif; ?>
	                  		<?php if ( get_theme_mod('project_management_testimonial_designation'.$i) ) : ?>
	                    		<h6><?php echo esc_html( get_theme_mod('project_management_testimonial_designation'.$i ) ); ?></h6>
	                  		<?php endif; ?>
	                  	</div>
	              	<?php } ?>
				</div>
	    	</div>
	    </div>
		</div>
	</div>

<?php endif; ?>