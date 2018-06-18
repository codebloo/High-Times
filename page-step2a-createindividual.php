<?php 
/* Template Name: Step 2a - Create Individual Profile   */
get_header();?>	


<section class="page_content">
	<div class="container">
		<form>
		<section class="legal_details">
			<div class="row">
			    <div class="col-12">
					<h2>Create your Individual Investor Profile</h2>
					<h3>Personal Info</h3>
				</div>
			</div>
			<div class="row">
	    		<div class="col-6">
		            <div class="form-group">
						<label class="control-label" for="">Legal First Name</label>
						<input type="text"  class="form-control" >
					</div>
	    		</div>
	    		<div class="col-6">
		            <div class="form-group">
						<label class="control-label" for="">Legal Last Name</label>
						<input type="text"  class="form-control" >
					</div>
	    		</div>
				<div class="col-12">
					<div class="checkbox">
					<label class="required control-label" for="legalname">
					<input type="checkbox" id="legalname" /> Legal Name is the same account name data</label>
				</div>
			</div>
			<div class="row">
				<div class="col-12"><label>Address</label></div>
				<div class="col-4">
					 <div class="form-group">
						<input type="text"   placeholder="City" class="form-control" >
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<select  class="form-control" data-show="" placeholder="State" data-related-to="">
							<option  value=""></option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<input type="text"  data-show="" data-placeholder="" data-related-to="" placeholder="Zip" class="form-control" >
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label class="control-label" for="">Phone</label>
						<input type="text"  data-show="" data-placeholder="" data-related-to="" data-seriesone-mask="" data-phone="contact-phone" class="form-control valid" placeholder="(XXX) XXX-XXXX" autocomplete="off" data-hidden-name="" aria-invalid="false">
						<input type="hidden" class="hiddenPhone">
					</div>
				</div>
			</div>	
			<div class="row">
			    <div class="col-12">
		            <div class="form-group">
						<div class="checkbox citizen_check">
							<label class="toggle-label" for="us_citizen">
								<input type="checkbox"  id="us_citizen">I am United States Citizen, US resident. 
								<div class="tooltip">
									<i class="fa fa-question"></i>
							
									<div class="tooltip_container">
										<div class="tooltip_content">
										<p>Substitute Form W-9 Statement</p>
										<p>Under penalty of perjury, by accepting the agreement below I certify that I have provided my correct taxpayer identification number.</p>
									</div>
									</div>
							
								</div>
							</label>
						</div>
					</div>
			    </div>
			</div>
		</section>
		<section class="income_verification">
			<div class="row">
			    <div class="col-12">
					<div class="legal_disclaimer">
						<p>This information is needed to comply with SEC and State securities regulations. We ask the following questions to determine if the amount you may invest is limited by law.</p>
					</div>
				</div>
			</div>
			<div class="row">
			    <div class="col-12">
		            <div class="form-group">
						<div class="checkbox">
							<label class="toggle-label" for="chkAccreditation">
								<input type="checkbox"  id="chkAccreditation">Are you an accredited investor? 
								<div class="tooltip">
									<i class="fa fa-question"></i>
									<div class="tooltip_container">
										<div class="tooltip_content">
										<p>You earn over $200,000 per year, have a net worth of $1m or more, or are an institutional investor</p>
										</div>
									</div>
								</div>
							</label>
						</div>
					</div>
			    </div>
			</div>
			<div class="not_accredited" id="not_accredited">
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label class="control-label" for="">What is your net worth?</label>
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input type="text" class="form-control valid" aria-invalid="false">
						</div>
					</div>
				</div>
			</div>								
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="bold control-label" for="">What is your annual income?</label>
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</div>								
				<div class="row">
				<div class="col-12">
					<h4>How much am I allowed to invest? 
						<div class="tooltip">
							<i class="fa fa-question"></i>
							<div class="tooltip_container">
						<div class="tooltip_content">
							<p> Investment limits are for every twelve-month period. Every investment in a Regulation Crowdfunding offering counts towards the annual limit on any crowdfunding platform. You should always track how much you invest on seriesOne and other platforms and not exceed that limit. Here are the rules: </p>
							<ul>
							<li>Everyone can invest at least $2,000.</li>
							<li>If either your net worth or income is below $100,000, you may legally invest a maximum of 5% of the lesser number.</li>
							<li>If both your net worth and income are above $100,000, you may legally invest a maximum of 10% of the lesser number.</li>
							<li>No one may invest more than $100,000. Accredited investors are subject to the same investment limitations as everyone else.</li>
							</ul>
							<p>For Regulation D offerings, only Accredited Investors may invest, and there are no limits on how much they can invest. Accredited Investors are affluent: typically earning more than $200,000 per year ($300,000 if joint with spouse) or having more than $1 million in assets, not including their primary home.</p>
						</div>
					</div>
						</div>
					</h4>
				</div>
			</div>
				<div class="row">
				<div class="col-12">
					<p>Regulation Crowdfunding Limit: <strong>VALUESHERE</strong></p>
				</div>
			</div>
			</div>
			<div class="is_accredited" id="is_accredited" style="display: none">
				<div class="row">
				<div class="col-12">
					<div class="checkbox">
						<label class="required control-label" for="networth">
							<input type="checkbox" id="networth" /> I have an individual net worth, or joint net worth with my spouse, that exceeds $1 million including any IRA’s, 401 K’s and other retirement accounts, but excluding the net value of my primary residence.
						</label>
					</div>
					<div class="checkbox">
						<label class="required control-label" for="annualincome">
							<input type="checkbox" id="annualincome" /> I am an individual with income of over $200,000 in each of the last two years, or joint income with my spouse exceeding $300,000 in those years, and I reasonably expect at least the same this year.
						</label>
					</div>
				</div>
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

<script>
	jQuery(function ($) {
	        $("#chkAccreditation").click(function () {
	            if ($(this).is(":checked")) {
	                $("#is_accredited").show();
	                $("#not_accredited").hide();
	            } else {
	                $("#is_accredited").hide();
	                $("#not_accredited").show();
	            }
	        });
	    });

</script>

<?php get_footer();?>
