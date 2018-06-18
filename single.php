<?php get_header();?>

<section class="page_content">
	<div class="container">
		<div class="row-12">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	<div class="single_post">
		<h3><?php the_title();?></h3>
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('insta', array('class' => 'scale-with-grid'));
		}?>
		
		<?php the_content();?>
	</div>
<?php endwhile; endif;?>	
	</div>
		</div>
</section>

<?php get_footer();?>
