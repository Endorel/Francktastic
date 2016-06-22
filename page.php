<?php

get_header(); ?>

<div class="site-content clearfix">

	<!-- main column -->
	<div class="main-column">


		<?php if(have_posts()) :
			
			while (have_posts()) : the_post(); ?>

				<article class="posts page">
					<p><?php the_content(); ?></p>
				</article>
			
			<?php endwhile;
			
			else:
			
				echo "<p>Hittade inga inlägg.</p>";

		endif;
	?>

	</div>

	<?php  get_sidebar() ?>

</div>

<?php

get_footer();

?>