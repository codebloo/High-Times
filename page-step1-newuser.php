<?php 
/* Template Name: Step 1 - Create Acount   */
get_header();?>	


<section class="page_content">
	<div class="container">
	
				
				<section class="register_new_user">
					<div class="row">
						<div class="col-12 col-twelve">
							<h2 class="create_title">Create Account</h2>
							<p class="already_registered">Already an investor? <a href="<?php bloginfo('url');?>/login" class="login_link">Login</a></p>
						</div>
					</div>	
					<!-- WORDPRESS USER REGISTRATION -->	
						<form class="register_user">
							<section class="account_details">
								<div class="row">
							    	<div class="col-6 col-six">
							            <div class="form-group">
											<label class="control-label" for="">First Name</label>
											<input type="text"  class="form-control" >
										</div>
							    	</div>

							    	<div class="col-6 col-six">
							            <div class="form-group">
											<label class="control-label" for="">Last Name</label>
											<input type="text"  class="form-control" >
										</div>
							    	</div>
								</div>

							<div class="row ">
							    <div class="col-12 col-twelve">
							        <div class="form-group">
										<label class="control-label" for="">Email Address</label><input type="email"  autocomplete="off" class="form-control" >
									</div>
								</div>
							</div>
							<div class="row ">
							    <div class="col-12 col-twelve">
									<div class="form-group">
										<label class="control-label" for="">Confirm Email Address</label>
										<input type="email"  autocomplete="off" class="form-control" >
									</div>
							    </div>
							</div>
							<div class="row">
							    <div class="col-12 col-twelve">
							        <div class="form-group">
										<label class="control-label" for="">Phone Number</label>
										<input type="phone"  autocomplete="off" class="passwordStrength form-control" >
									</div>
								</div>
							</div>
							
							<!--<div class="row">
							    <div class="col-12 col-twelve">
							        <div class="form-group">
										<label class="control-label" for="">Password</label>
										<input type="password"  autocomplete="off" class="passwordStrength form-control" >
									</div>
								</div>
							</div>		
							<div class="row">
							    <div class="col-12 col-twelve">
									<div class="form-group">
										<label class="control-label" for="">Confirm Password</label>
										<input type="password"  autocomplete="off" class="form-control" >
									</div>
							
								</div>
							</div>-->
							<div class="row">
							    <div class="col-12 col-twelve">
									<div class="form_buttons">
										<a class="button" href="http://clients.codebloo.com/invest/step-2-first-visit/">Next</a>
								
									</div>	
								</div>
						</section>
						
					
						</form>
					<!-- -->
				</section>
		
		
	</div>	
</section>

<?php get_footer();?>
