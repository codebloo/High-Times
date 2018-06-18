<?php get_header();?>

<section class="page_content">
	<h2>Archive</h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	<div class="single_post">
		<h3><?php the_title();?></h3>
		<?php the_content();?>
	</div>
<?php endwhile; endif;?>	
</section>

<?php get_footer();?>
