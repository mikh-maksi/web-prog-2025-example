<?php
	the_posts_pagination( array(
		'prev_text' => esc_html__( 'Previous page', 'project-management' ),
		'next_text' => esc_html__( 'Next page', 'project-management' ),
	) );