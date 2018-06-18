<?php get_header();?>

<section class="page_content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
					<h2><?php the_title();?></h2>
					<?php the_content();?>
				<?php endwhile; endif;?>
			</div>	
		</div>	
	</div>	
</section>

<?php get_footer();?>
