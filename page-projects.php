<?php

get_header(); ?>

<div class="site-content clearfix">

	<!-- main column -->
	<div class="main-column">


		<?php
		$project = new WP_Query('cat=6');

		 if($project -> have_posts()) :
			
			while ($project -> have_posts()) : $project -> the_post(); ?>

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