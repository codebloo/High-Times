</main>
<footer>
	

<div class="footer_main">	
	<div class="container">
		<div class="row">
			<div class="col-12 col-twelve">
				<div class="footer_logo">
					<a href="https://hightimes.com/">
						<img src="https://3ncb884ou5e49t9eb3fpeur1-wpengine.netdna-ssl.com/wp-content/uploads/2017/11/200x600@2x.png" alt="High Times" data-rjs="2" data-rjs-processed="true">
					</a>
				</div>
			</div>	
		</div>	
		
		<div class="row">
			<div class="col-12 col-twelve">
				<ul class="footer_social social_links">
					<li><a href="https://www.facebook.com/HighTimesMag/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://twitter.com/High_Times_Mag" target="_blank" ><i class="fab fa-twitter"></i></a></li>
					<li><a href="https://www.pinterest.com/hightimesmag/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
					<li><a href="https://www.instagram.com/hightimesmagazine/" target="_blank" ><i class="fab fa-instagram"></i></a></li>
					<li><a href="https://plus.google.com/+hightimes" target="_blank"><i class="fab fa-google-plus"></i></a></li>
					<li><a href="https://www.youtube.com/hightimes" target="_blank" ><i class="fab fa-youtube"></i></a></li>
					<li><a href="https://www.linkedin.com/company/high-times" target="_blank"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="https://hightimesmag.tumblr.com/" target="_blank"><i class="fab fa-tumblr"></i></a></li>
				</ul>
			</div>	
		</div>
		
		<div class="row">
			<div class="col-12 col-twelve">
				<div class="footer_nav">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'before' => '<span>','after' => '</span>','menu_class' => 'nav group') ); ?>
				</div>
			</div>	
		</div>
		
	</div>
</div>

	
<div class="footer_bottom">	
	<div class="container">
		<div class="row">
			<div class="col-12 col-twelve">
				<div id="copyright"><p>Copyright &copy; 1974-<? echo date('Y');?> <?php bloginfo('name'); ?></p></div>
			</div>	
		</div>	
	</div>
</div>


</footer>

<?php wp_footer(); ?>
    <!-- Java Script
    ================================================== -->

    <script src="<?php bloginfo('template_directory');?>/js/plugins.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/main.js"></script>

</body>
</html>

