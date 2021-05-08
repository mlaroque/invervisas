<footer role="contentinfo">
	<div class="container foot">		
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12 col-sm-6 col-md-3 col-lg-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12 col-sm-6 col-md-3 col-lg-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
				<?php endif; ?>
			</div>
<!--
			<div class="col-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-5') ) : ?>
				<?php endif; ?>
			</div>
-->
		</div>
	</div>

 <div class="container-fluid footHori">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hori') ) : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 footSx">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hsx') ) : ?>
			<?php endif; ?>
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6  footDx">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hdx') ) : ?>
			<?php endif; ?>
		</div>
	</div>

	<div class="row copy">
		<div class="col-12">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('copyright') ) : ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</footer>

<?php
	wp_footer();
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lazy-load.js"></script>

<?php if($post->ID === 341 || $post->ID === 333 || $post->ID === 75):?>
<script src="<?php echo get_template_directory_uri(); ?>/js/tablas-responsive.js"></script>
<?php endif; ?>
</div>
</body>
</html>