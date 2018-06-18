<?php 
/* Template Name: Step 2a - Create Business Profile  */
get_header();?>	


<section class="page_content">
	<div class="container">
	<section class="account_verification">
							<div class="row">
							    <div class="col-12">
									<h2>Create your Business Investor Profile</h2>
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
							<div class="row">
							    <div class="col-12">
									<div class="legal_disclaimer">
										<p>This information is needed to comply with SEC and State securities regulations. We ask the following questions to determine if the amount you may invest is limited by law.</p>
								</div>
								</div>
							</div>
						</section>
							
							
			
						<section class="business_entity tab_content">
								<section class="entity_type row">
									<ul class="col-12">
										<li><label><input type="radio" name="entity_type" />We are a business, trust or other non-individual entity in which all the equity owners or grantors / settlors are accredited investors.</label></li>
<li><label><input type="radio" name="entity_type" />We are a bank, insurance company, pension fund, or other registered investment company with assets exceeding $5 million.</label></li>
<li><label><input type="radio" name="entity_type" />We are a corporation, partnership, or charitable organization with at least $5 million in assets.</label></li>
<li><label><input type="radio" name="entity_type" />We are an employee benefit plan, within the meaning of the Employee Retirement Income Security Act, if a bank, insurance company, or registered investment adviser makes the investment decisions, or if the plan has total assets in excess of $5 million.</label></li>
<li><label><input type="radio" name="entity_type" />We are a trust with assets in excess of $5 million, not specifically formed to acquire the securities offered, whose purchases a sophisticated investor makes.</label></li></ul>
										
									</ul>
								</section>
								<section class="legal_details">
										<div class="row">
										    <div class="col-12"><h3>Entity Info</h3></div>
										</div>
										<div class="row">
									    	<div class="col-12">
									            <div class="form-group">
													<label class="control-label" for="">Legal Entity Name</label>
													<input type="text"  class="form-control" >
												</div>
									    	</div>
										</div>
										<div class="row">
									    	<div class="col-12">
									            <div class="form-group">
													<label class="control-label" for="">Entity Country</label>
													<select  class="form-control" disabled>
														<option>United States</option>
													</select>
												</div>
									    	</div>
										</div>
										<div class="row">
											<div class="col-12"><label>Entity Address</label></div>
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
													<input type="text"  placeholder="Zip" class="form-control" >
												</div>
											</div>
										</div>
											<div class="row">
										    	<div class="col-12">
										            <div class="form-group">
														<label class="control-label" for="">Entity Email Address</label>
														<input type="email"  class="form-control" >
													</div>
										    	</div>
												<div class="col-12">
													<div class="checkbox">
														<label class="required control-label" for="entity_email_same">
														<input type="checkbox"   id="entity_email_same"  /> 
														Entity Email Address is the same as account email</label>
													</div>
												</div>
											</div>
											
											
										
									
								
								<div class="row">
									<div class="col-12">
										<div class="form-group entity_phone">
											<label class="control-label" for="">Entity Phone</label>
											<input type="text"  class="form-control valid" placeholder="(XXX) XXX-XXXX" autocomplete="off" aria-invalid="false">
											<input type="hidden" class="hiddenPhone">
										</div>
									</div>
								</div>
									</section>
								<section class="legal_details">
									<div class="row">
									    <div class="col-12"><h3>Owner or Principal Info</h3></div>
									</div>
									<div class="row">
								    	<div class="col-6">
								            <div class="form-group">
												<label class="control-label" for="">First Name</label>
												<input type="text"  class="form-control" >
											</div>
								    	</div>

								    	<div class="col-6">
								            <div class="form-group">
												<label class="control-label" for="">Last Name</label>
												<input type="text"  class="form-control" >
											</div>
								    	</div>
								
										<div class="col-12">
											<div class="checkbox">
												<label class="required control-label" for="first_last">
												<input type="checkbox"   id="first_last" value="1" /> First/Last Name is the same account name data</label>
											</div>
										</div>
									</div>
							
									<div class="row">
										<div class="col-12">
								            <div class="form-group">
												<label class="control-label" for="">Job Title</label>
												<input type="text"  class="form-control" >
											</div>
								    	</div>
									</div>
							<div class="row">
						    	<div class="col-12">
						            <div class="form-group">
										<label class="control-label" for="">Entity Country</label>
										<select  class="form-control" disabled>
											<option>United States</option>
										</select>
									</div>
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
								</section>
							
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
					<!-- -->
				</section>
		
		
	</div>	
</section>

<?php get_footer();?>
