<?php 
/* Template Name: Step 2a - Create Trust   */
get_header();?>	


<section class="page_content">
	<div class="container">
		<form>
		<section class="legal_details">
			<div class="row">
			    <div class="col-12">
					<h2>Create your Trust Profile</h2>
					<h3>FIELDS NEEDED</h3>
				</div>
			</div>
			
		</section>
	
		<section class="please_confirm">
	<div class="row">
	    <div class="col-12">
			<h3>Please confirm the following:</h3>
		</div>
	</div>
	<div class="row">
	    <div class="col-12">
	            <div class="form-group">
					<div class="checkbox">
						<label for="cancellation">
							<input type="checkbox" id="cancellation" />
		            		I understand that I may only cancel my commitment to purchase up to 48 hours before the offering period expires.
						</label>
					</div>
				</div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-12 ">
	            <div class="form-group"><div class="checkbox"><label for="resale">
					<input type="checkbox" id="resale"/>
	            I understand that the securities being offered are restricted and may only be resold under certain circumstances.</label></div></div>
	    </div>
	</div>
	<div class="row ">
	    <div class="col-12">
	            <div class="form-group"><div class="checkbox"><label for="risk"><input type="checkbox" id="risk"/>
	            I understand that investing in securities involves risks and I should not invest unless I can bear the loss of risk, including a 100% loss.</label></div></div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-12">
	        <div class="form-group">
	            <div class="checkbox">
	                <label class="toggle-label required whole-width-label" for="agree_terms">
	                        <input type="checkbox" id="agree_terms" />  I agree to the <a  href="<?php bloginfo('url');?>/terms-of-use" target="_blank">Terms of Use</a>,
	                    <a  href="<?php bloginfo('url');?>/privacy-policy" target="_blank">Privacy Policy</a>
	                    and the
	                    <a  href="<?php bloginfo('url');?>/electronic-consent-and-delivery-agreement" target="_blank">Electronic Consent &amp; Delivery-Agreement</a>.
	                </label>
	              
	            </div>
	        </div>
	    </div>
	</div>
</section>								
		<div class="row">
   		 	<div class="col-12">
		<div class="form_buttons">
			<a href="<?php bloginfo('url');?>/step-2-repeat-visit-existing-profile/"  class="button">Next</a>
		</div>	
	</div>	
</div>

		</form>
	</div>	
</section>

<?php get_footer();?>
