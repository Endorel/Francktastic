<?php

get_header(); ?>

<div class="site-content clearfix">

	<!-- main column -->
	<div class="main-column">
<?php

		$education = new WP_Query('cat=3');

		 if($education -> have_posts()) :
			
			while ($education -> have_posts()) : $education -> the_post(); ?>

				<article class="posts page">
					<div id="title"><h2><?php the_title(); ?></h2></div>
					<div id="content"><p><?php the_content(); ?></p></div>
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