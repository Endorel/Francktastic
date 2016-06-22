<?php

get_header(); ?>

<div class="site-content clearfix">

	<!-- main column -->
	<div class="main-column">

<div class="experience">

	<h1>Erfarenhet</h1>
	<?php 
		$experience = new WP_Query(['post_type' => 'experience']) ;
		while( $experience->have_posts() ) : $experience->the_post() ;
	?>
	<h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>

		<!-- <p><?php the_content(); ?></p> -->


<?php endwhile; ?>

</div>

<div class="education">
	<h1>Utbildning</h1>
	<?php 
		$education = new WP_Query(['post_type' => 'education']) ;
		while( $education->have_posts() ) : $education->the_post() ;
	?>
	<h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>

		<!-- <p><?php the_content(); ?></p> -->


<?php endwhile; ?>
</div>

	</div>

	<?php  get_sidebar(); ?>

</div>

<?php

get_footer();

?>