<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
	<?php get_template_part( "template-parts/global", "navigator" );?>
	<div class="container">
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
		<div class="row post-container">
			<div class="col">
				<section class="post-thumbnail">
					<?php the_post_thumbnail('post-cover');?>
				</section>
				<h2 class="post-title"><?php the_title(); ?></h2>
				<p class="post-meta small">
					<?php _e( 'Posted in: ' ); ?> <?php the_category( ',' ); ?> 
					<?php _e( 'On '); ?> <?php the_time( get_option( 'date_format' ) ); ?>
				</p>
				<section class="content">
					<?php the_content(); ?>
				</section>
				<section class="post-tags small">
					<?php the_tags( __('Tags: '), ' ' );?>
				</section>
				<section class="post-comments">
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>
				</section>
			</div>
		</div>
		<?php endwhile; endif;?>
	</div>
	<?php wp_footer(); ?>
</body>
</html>