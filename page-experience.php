<?php

get_header(); ?>

<div class="site-content clearfix">

	<!-- main column -->
	<div class="main-column">


		<?php
		$experience = new WP_Query('cat=4');

		 if($experience -> have_posts()) :
			
			while ($experience -> have_posts()) : $experience -> the_post(); ?>

				<article class="posts page">
					<h2><?php the_title(); ?></h2>
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