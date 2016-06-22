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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>