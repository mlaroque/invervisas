<?php /* Template Name: Portada */ ?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12 txtBig text-center">
			Blablabla Invervisas blablabla Inver! Blablabla Visas!
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="colearfix"></div>

<div class="container-fluid marPad0">
	<div class="row">
		<div class="col-12 marPad0 books">
			
		</div>
	</div>
</div>
<?php get_footer(); ?>