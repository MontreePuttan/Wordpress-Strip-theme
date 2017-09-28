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
				<a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
				<p class="post-meta small">
					<?php _e( 'Posted in: ' ); ?> <?php the_category( ',' ); ?> 
					<?php _e( 'On '); ?> <?php the_time( get_option( 'date_format' ) ); ?>
				</p>
				<section class="post-thumbnail">
					<?php the_post_thumbnail('post-cover');?>
				</section>
				<section class="content">
					<?php the_content(); ?>
				</section>
				<section class="post-tags small">
					<?php the_tags( __('Tags: '), ' ' );?>
				</section>
			</div>
		</div>
		<?php endwhile; endif;?>
		<div class="row nav-pagination">
			<div class="col-6">
				<?php next_posts_Link( __("&laquo; Previous page") ); ?>
			</div>
			<div class="col-6">
				<?php previous_posts_link( __("Next page &raquo;") ); ?>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>