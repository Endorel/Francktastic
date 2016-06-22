<?php

get_header();

?>

<div class="site-content clearfix">

	<!-- main column -->
	<div class="main-column">

		<?php if (have_posts()) :
			
			while (have_posts()) : the_post(); ?>

					<div class='post-nav clearfix'>
						<div class='previous-post'><?php previous_post_link(); ?></div>
						<div class='next-post'><?php next_post_link(); ?></div>
					</div>

				<article class="posts page">
					<?php get_template_part('blogpost') ?>
				</article>
			
			<?php endwhile;
			
			else:
			
				echo "<p>Hittade inga inlägg.</p>";

		endif;	?>

	</div>

	<?php get_sidebar() ?>
	
</div>

<?php
get_footer();

?>