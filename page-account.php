<?php 
/** Template Name: Account Pages */
get_header();?>

<section class="page_content">
	<div class="container">
		<div class="row">
			<aside class="col-3">
				<?php wp_nav_menu( array( 'theme_location' => 'account-menu', 'before' => '<span>','after' => '</span>','menu_class' => 'account_nav') ); ?>
			</aside>
			<div class="col-9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
					<h2><?php the_title();?></h2>
					<?php the_content();?>
				<?php endwhile; endif;?>
			</div>	
		</div>	
	</div>	
</section>

<?php get_footer();?>
