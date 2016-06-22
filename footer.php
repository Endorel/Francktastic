	<footer class="site-footer">

		<!--<nav class="site-nav">

			<?php $args = array(
				'theme_location' => 'footer'
			); ?>

				<?php wp_nav_menu( $args ); ?>
			</nav>-->

	</footer>

	<div class="footer-widget clearfix">
	<?php
		if ( is_active_sidebar('sidebar-2')) : ?>
	
			<div class="widget-area">
			<?php dynamic_sidebar('sidebar-2'); ?>
			</div>
		<?php endif;

		if ( is_active_sidebar('sidebar-3')) : ?>
	
			<div class="widget-area">
			<?php dynamic_sidebar('sidebar-3'); ?>
			</div>
		<?php endif;

?>
</div>

<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

</div> <!-- container -->


<?php wp_footer(); ?>


</body>
</html>