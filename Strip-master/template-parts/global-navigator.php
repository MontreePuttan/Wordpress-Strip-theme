	<nav class="navbar navbar-toggleable-md navbar-light main-navigator">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<i class="mr-auto" /></i>
				<ul class="navbar-nav">
					<?php
						wp_nav_menu( array(
							'menu'              => 'main-menu',
							'theme_location'    => 'main-menu',
							'depth'             => 2,
							'container' => '',
							'items_wrap' => '%3$s',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					?>
				</ul>
			</div>
		</div>
	</nav>