<?php 
/* Template Name: Home */
get_header();?>


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-natural-width=3000 data-natural-height=2000 data-position-y=top  style="background:url(<?php the_post_thumbnail_url();?>);" class="v2">

        <div class="shadow-overlay" id="top"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <h1>
				<span><?php the_field('headline');?></span>
				<span><?php the_field('headline_line_2');?></span>
				<span class="red"><?php the_field('headline_line_3');?></span>
                </h1>

                <p> <?php the_field('tagline_bold');?></strong> <?php the_field('tagline_regular');?></p>
				
				<div class="video-container">
					<iframe src="https://player.vimeo.com/video/<?php the_field('hero_video_id');?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				
				<section class="countdown">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
						<?php the_content();?>
					<?php endwhile; endif;?>
	
				</section>
				
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#perks">Perks<span>what you get</span></a></li>
            <li><a class="smoothscroll" href="#offering">Offering<span>what we have</span></a></li>
            <li><a  class="smoothscroll" href="#faq">FAQ<span>your questions</span></a></li>
        </ul> <!-- end home-sidelinks -->

       

        <a href="#history" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll Down</span>
            <span class="home-scroll__icon"></span>
        </a> <!-- end home-scroll -->

    </section> <!-- end s-home -->


    <!-- History
    ================================================== -->
    <section id="history" class="s-about">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
				<h3 class="subhead">History</h3>
                <h1 class="display-1"><span>High Times</span> <?php the_field('history_headline');?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
              <?php the_field('history_text');?>
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row">
          <div class="col-full" data-aos="fade-up">
	       	<h4>Watch</h4>
				<div class="video-container">
					<iframe src="https://player.vimeo.com/video/<?php the_field('history_video_id');?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
           </div>              
        </div> <!-- end video -->

        </div> <!-- end about-stats -->

    </section> <!-- end s-about -->
	<section class="red_cta">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
					<a href="">
						<img src="http://www.placehold.it/400x150.jpg" class="cta_logo" />
						<img src="http://www.placehold.it/400x150.jpg" class="cta_text"/>
					</a>
				</h1>
            </div>
        </div> <!-- end section-header -->
	</section>


    <!-- community
    ================================================== -->
    <section id="community" class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Community</h3>
                <h1 class="display-1"><span>High Times</span> <?php the_field('community_headline');?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
               <?php the_field('community_text');?>
                </p>
            </div>
        </div> <!-- end about-desc -->

    
        <div class="row">
          <div class="col-full" data-aos="fade-up">
	       	<h4>Watch</h4>
				<div class="video-container">
					<iframe src="https://player.vimeo.com/video/<?php the_field('history_video_id');?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
           </div>              
        </div> <!-- end video -->

    </section> <!-- end s-services -->

	<section class="red_cta">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1"><a href="">Get High with us!</a></h1>
            </div>
        </div> <!-- end section-header -->
	</section>
	
    <!-- Opportunity
    ================================================== -->
    <section id="opportunity" class="s-works">
                
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Opportunity</h3>
                <h1 class="display-1"><span>High Times</span> <?php the_field('opportunity_headline');?></h1>
            </div>
        </div> <!-- end section-header -->
		
        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
               <?php the_field('opportunity_text');?>
                </p>
            </div>
        </div> <!-- end about-desc -->
		

		
		
        <div class="row">
          <div class="col-full" data-aos="fade-up">
	       	<h4>Watch</h4>
				<div class="video-container">
					<iframe src="https://player.vimeo.com/video/<?php the_field('history_video_id');?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
           </div>              
        </div> <!-- end video -->

        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row">
                <div class="col-full testimonials-header">
                    <h2 class="h1">What People Are Saying.</h2>
                </div>
            </div>

			 <?php if( have_rows('quote_item')):?>
            <div class="row testimonials">
                <div class="col-full testimonials__slider">
				
					<?php  while ( have_rows('quote_item')) : the_row();?>
					      <div class="testimonials__slide">
	   						<?php $quoteimage = wp_get_attachment_image_src(get_sub_field('quote_picture'), 'thumbnail'); ?>
	   						<img src="<?php echo $quoteimage[0]; ?>" alt="<?php echo get_the_title(get_sub_field('quote_picture')) ?>"  alt="Author image" class="testimonials__avatar"/>
								   
							    <p><?php the_sub_field('quote_text');?></p>
		                        <div class="testimonials__author">
		                           <?php the_sub_field('quote_attribution');?>
		                            <span><?php the_sub_field('quote_position');?></span>
		                        </div>
		                    </div> <!-- end testimonials__slide -->
					<?php endwhile; ?>
				
	  				</div> <!-- end testimonials__slider -->
            	</div> <!-- end testimonials -->
			<?php endif; ?>
        </div> <!-- end testimonials-wrap -->

    </section> <!-- end s-works -->

	<section class="red_cta">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1"><a href="">Get High with us!</a></h1>
            </div>
        </div> <!-- end section-header -->
	</section>

    <!-- Freedom
    ================================================== -->
    <section id="freedom" class="s-about">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
				<h3 class="subhead">Freedom</h3>
                <h1 class="display-1"><span>High Times</span> <?php the_field('freedom_headline');?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
           <?php the_field('freedom_text');?>
                </p>
            </div>
        </div> <!-- end about-desc -->

 
		<?php $magazine_covers = get_field('magazine_covers'); $size = 'full'; if( $magazine_covers): ?>
		    <div class="clearfix magazines">
		        <?php foreach( $magazine_covers as $magazine_cover): ?>
		            <div class="magazine_cover">
		            	<?php echo wp_get_attachment_image( $magazine_cover['ID'], $size ); ?>
		            </div>
		        <?php endforeach; ?>
		    </div>
		<?php endif; ?>

		
        <div class="row">
          <div class="col-full" data-aos="fade-up">
	       	<h4>Watch</h4>
				<div class="video-container">
					<iframe src="https://player.vimeo.com/video/<?php the_field('history_video_id');?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
           </div>              
        </div> <!-- end video -->

    </section> <!-- end s-freedom -->
	
	
	
	<section class="red_cta">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1"><a href="">Get High with us!</a></h1>
            </div>
        </div> <!-- end section-header -->
	</section>

    <!-- Activism
    ================================================== -->
    <section id="activism" class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Activism</h3>
                <h1 class="display-1"><span>High Times</span> <?php the_field('activism_headline');?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
              <?php the_field('activism_text');?>
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">
            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon service-icon--mobile-dev">
                    <i class="icon-lego-block"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">1974</h3>
                    <p>Originally meant to be a joke: a single-issue lampoon of Playboy, substituting weed for sex, High Times Magazine is founded by Tom Forçade.
                    </p>
                </div>
            </div>
			

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon  service-icon--web-design">
                    <i class="icon-earth"></i>
                </div>  
                <div class="service-text">
                    <h3 class="h4">1978</h3>
                    <p>: New Mexico passes the Controlled Substances Therapeutic Research Act, becoming the first state to enact legislation recognizing the medical value of marijuana.[15] Over 30 other states would pass limited medical cannabis measures during the next few years.</p>
                </div>
            </div>
			

            <div class="col-block service-item " data-aos="fade-up">
                <div class="service-icon service-icon--brand-identity">
                    <i class="icon-tv"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">1987</h3>
                    <p>High Times Freedom Fighters, a marijuana legalization group was started by High Times Editor-in-Chief Steven Hager.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon  service-icon--illustration">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">1996</h3>
                    <p>California become the first state to legalize medical cannabis with approval of Proposition 215</p>
        
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon service-icon--product-strategy">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">2012</h3>
                    <p>Colorado and Washington become the first two states to legalize the recreational use of cannabis, following the passage of Amendment 64 and Initiative 502 </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon  service-icon--ui-design">
                    <i class="icon-window"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">2016</h3>
                    <p>California, Nevada, Main and Massachusetts legazlzed recreation cannabit through ballot measure</p>
                    </p>
                </div>
            </div>
    
       

        </div> <!-- end services-list -->
        <div class="row">
          <div class="col-full" data-aos="fade-up">
	       	<h4>Watch</h4>
				<div class="video-container">
					<iframe src="https://player.vimeo.com/video/<?php the_field('history_video_id');?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
           </div>              
        </div> <!-- end video -->

    </section> <!-- end s-activism -->
	
	<section class="red_cta">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1"><a href="">Get High with us!</a></h1>
            </div>
        </div> <!-- end section-header -->
	</section>

    <!-- health
    ================================================== -->
    <section id="health" class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Health</h3>
                <h1 class="display-1"><span>High Times</span> <?php the_field('health_headline');?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                <?php the_field('health_text');?>
                </p>
            </div>
        </div> <!-- end about-desc -->

      <div class="row">
        <div class="col-full" data-aos="fade-up">
       	<h4>Watch</h4>
			<div class="video-container">
				<iframe src="https://player.vimeo.com/video/<?php the_field('history_video_id');?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
         </div>              
      </div> <!-- end video -->

    </section> <!-- end s-health -->
	
	<section class="red_cta">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1"><a href="">Get High with us!</a></h1>
            </div>
        </div> <!-- end section-header -->
	</section>
	
    <!-- Activism
    ================================================== -->
    <section id="perks" class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Perks</h3>
                <h1 class="display-1">What's in it for me?</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
               We believe that owning stock shouldn’t only be for those with brokerage accounts. With our Stock offering you can purchase as little as one $11 share of High Times using your debit or credit card and own your shares now before we list on the NASDAQ.
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">
  		<?php if( have_rows('perk_details')): while ( have_rows('perk_details')) : the_row();?>
			<div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon service-icon--mobile-dev">
                    <i class="fas fa-<?php the_sub_field('perk_icon');?>"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4"><?php the_sub_field('perk_value');?></h3>
					 <p class="perk_name"><?php the_sub_field('perk_name');?></p>
                    <p><?php the_sub_field('perk_description');?></p>
                </div>
            </div>
		<?php endwhile;endif;?>
        
    
       

        </div> <!-- end services-list -->

    </section> <!-- end s-activism -->
	
	<section class="red_cta">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1"><a href="">Get High with us!</a></h1>
            </div>
        </div> <!-- end section-header -->
	</section>
	


    <!-- contact
    ================================================== -->
    <section id="faq"class="s-contact">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--light">FAQ</h3>
                <h1 class="display-1 display-1--light">Frequently Asked Questions</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row">

            <div class="col-full" data-aos="fade-up">
	  		<?php if( have_rows('faq_item')):?>
	  	
			 <ul class="clearfix">
			<?php  while ( have_rows('faq_item')) : the_row();?>
				<li>
					<h4 class="question"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <?php the_sub_field('question');?></h4> 
					<div class="answer"><?php the_sub_field('answer');?></div>
				</li>
			<?php endwhile; ?>
			</ul>
	  		
	  		<?php endif; ?> 

        	</div> <!-- end row -->

    

        <div class="cl-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
        </div>
    

    </section> <!-- end s-contact -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">            
        </div>
    </div>



  
		
		
<script type="text/javascript">


//FAQ
jQuery("#faq .answer").hide();
  jQuery("#faq .question").click(function () {
      jQuery(this).next("#faq .answer").slideToggle(500);
      jQuery(this).toggleClass("expanded");
  });
  
  
  
  // When the user scrolls the page, execute myFunction 
  window.onscroll = function() {myFunction()};

  // Get the header
  var nav = document.getElementById("navigation");

  // Get the offset position of the navbar
  var sticky = nav.offsetTop;

  // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      nav.classList.add("sticky");
    } else {
      nav.classList.remove("sticky");
    }
  } 
  
 //NAV Scroll to
  
  jQuery('a[href*="#"]').on('click', function (e) {
  	e.preventDefault();

  	jQuery('html, body').animate({
  		scrollTop: jQuery(jQuery(this).attr('href')).offset().top - 50
  	}, 500, 'linear');
  });
  
  
  jQuery('#navigation li a').click(
      function(e) {
          e.preventDefault(); // prevent the default action
          e.stopPropagation(); // stop the click from bubbling
          jQuery(this).closest('ul').find('.active').removeClass('active');
          jQuery(this).parent().addClass('active');
      });
	  
	
  jQuery('.magazines').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:3,
              nav:false
          },
          1000:{
              items:4,
              nav:true,
              loop:false
          }
      }
  })	
	  
</script>


<?php get_footer();?>
