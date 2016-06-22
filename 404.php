<?php

get_header(); ?>

	<div id="primary" class="site-content clearfix">
		<main id="main" class="site-main main-column" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Ojdå! Sidan finns inte.', 'francktastic_theme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Det verkar som att sidan du sökte inte finns. Du kan testa att göra en ny sökning.', 'francktastic_theme' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			
			
		</main><!-- .site-main -->

		<div class="secondary-column">
			
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			
			</div>

	</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
