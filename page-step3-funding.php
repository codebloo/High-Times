<?php 
/* Template Name: Step 3 - Funding   */
get_header();?>

<section class="page_content">
	<div class="container">
	
				 <form  name="agreement" method="post" action="" novalidate="novalidate" role="form" class="form_agreement">
			 		<div class="row">
			 			<div class="col-12 col-twelve">
								<h2>How are you sending funds for this investment?</h2>
					<label class="control-label" for="agreement_PaymentMethod">Select Payment Method</label>
						<select id="" name="agreement_PaymentMethod" class="form-control funding_source">
							<option  value="" class="empty"></option>
							<option value="ach">ACH</option>
							<option value="wire">Wire</option>
							<option value="credit_card">Credit/Debit Card</option>
						</select>
					</div>
				</div>
						
						<!-- IF ACH -->
						<section class="ach_form payment_forms">
							<div class="row">
								<div class="col-12 col-twelve">
									<h2>ACH (Electronic Check) Authorization Form US Bank Account Only</h2>
								</div>
							</div>	
							<form  name="ach" method="post" action="" novalidate="novalidate" role="form">
								<div class="row">
									<div class="col-12 col-twelve">
										<div class="form-group">
											<label class="control-label required" for="ach_nameOnAccount">Name on Account</label>
											<input type="text"     id="ach_nameOnAccount" name="ach[nameOnAccount]"  required="required" class="form-control" ></div>
										</div>
								</div>
							<div class="row">
								<div class="col-6 col-six">
									<div class="form-group">
										<label class="control-label required" for="ach_routingNumber">Routing Number</label>
										<input type="text" id="ach_routingNumber" name="ach[routingNumber]"  required="required" minlength="9" maxlength="9" data-provide="routing-number" data-url="/routing-number-info" class="form-control" >
										<div class="bank_success"><i class="fa fa-check"></i> Bankname goes here on successful routing number search</div>
									</div>
								</div>
								<div class="col-6 col-six">
									<div class="form-group">
										<label class="control-label required" for="ach_accountNumber">Account Number</label>
										<input type="text" id="ach_accountNumber" name="ach[accountNumber]"  required="required" class="form-control" >
									</div>
								</div>
							</div>
							<div class="row checkbox-wrapper">
								<div class="col-6 col-six">
									<div class="form-group">
										<label class="control-label required">Check Type</label>
										<div id="ach_checkType">
											<div class="radio">
												<label for="ach_checkType_0" class="required">
													<input type="radio" id="ach_checkType_0" name="ach[checkType]"  required="required" value="personal" />Personal</label>
											</div>
											<div class="radio">
												<label for="ach_checkType_1" class="required">
												<input type="radio" id="ach_checkType_1" name="ach[checkType]"  required="required" value="business" />Business</label>
											</div>
										</div>
									</div>
								</div>

								<div class="col-6 col-six">
									<div class="form-group">
										<label class="control-label required">Account Type</label>
										<div id="ach_accountType">
											<div class="radio">
												<label for="ach_accountType_0" class="required"><input type="radio" id="ach_accountType_0" name="ach[accountType]"  required="required" value="checking" />Checking</label>
											</div>
											<div class="radio">
												<label for="ach_accountType_1" class="required"><input type="radio" id="ach_accountType_1" name="ach[accountType]"  required="required" value="savings" />
											Savings</label>
											</div>
										</div>
									</div>
								</div>
							</div>
									<div class="row">
										<div class="col-12 col-twelve">
											<p><strong>IMPORTANT: Please read before completing, signing and submitting.</strong></p>
											<p>Direct Payment via ACH is a transfer of funds from (or to) a bank account for the purposes of making a payment.</p>
											<p>I (we) hereby authorize the escrow agent (&ldquo;Escrow Agent&rdquo;), to electronically initiate credit and debit entries to my (our) account at the financial institution listed below (hereinafter &ldquo;Bank&rdquo;), and, if necessary, initiate adjustments for any transactions credited/debited in error.</p>
											<p>This authority authorizes the Escrow Agent to credit my (our) account to correct errors and with payments, refunds, reimbursements, and other funds, and to debit my (our) account for the investments I make, and will remain in effect until such time that the Escrow Agent is notified by me (us) in writing to revoke it, with such notice provided at support@hightimesinvestor.com at least 3 business days in advance. I (we) agree that the ACH transactions I (we) authorize comply with all applicable law.</p>
											<p>First transaction will occur on or after June 05, 2018.</p>
											<div class="form-group">
												<div class="checkbox">
													<label for="ach_agree" class="required"><input type="checkbox" id="ach_agree" name="ach[agree]"  required="required" value="1" />By checking this checkbox, I authorize the ACH transaction.</label>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-twelve">
									
											<div class="form_buttons">
												<a href="/deal/anton-regcf/invest/a050t000003onrIAAQ/agreement" class="button prev_button">Previous</a>
												<button type="submit" id="ach_next" name="ach[next]" class="button">Next</button>
											</div>
											<input type="hidden" id="credit_card__token" name="credit_card[_token]" class="form-control" value="" >
										</div>
									</div>
								</div>
							</form>
						</section>
						<!-- /END ACH -->
				
						<!-- IF CREDIT CARD -->
						<section class="cc_form payment_forms">
							<form  name="credit_card" method="post" action="" novalidate="novalidate" data-key="" role="form">
								<div class="row">
									<div class="col-12 col-twelve">
										<h2>Credit/Debit Card Details</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-8 col-eight">
										<div class="form-group">
											<label class="control-label required" for="credit_card_name">Cardholder Name</label>
											<input type="text" id="credit_card_name" name="credit_card[name]"  required="required" data-stripe="name" class="form-control" >
										</div>
									</div>
									<div class="col-4 col-four">
										<div class="form-group">
											<label class="control-label required" for="credit_card_zip">Billing Postal Code</label>
											<input type="text" id="credit_card_zip" name="credit_card[zip]"  required="required" data-stripe="address_zip" class="form-control" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-8 col-eight">
										<div class="form-group">
											<label class="control-label required" for="credit_card_number">Card Number</label>
											<input type="text" id="credit_card_number" name="credit_card[number]"  required="required" data-stripe="number" placeholder="XXXX-XXXX-XXXX-XXXX" data-seriesone-mask="cc" class="form-control" >
										</div>
									</div>
									<div class="col-4 col-four">
										<div class="form-group">
											<label class="control-label required" for="credit_card_code">CVC/CVV2 Code</label>
											<input type="text" id="credit_card_code" name="credit_card[code]"  required="required" data-stripe="cvc" minlength="3" maxlength="4" class="form-control" >
										</div>
									</div>
								</div>
						
								<div class="row">
									<div class="col-3">
										<div class="form-group">
											<label class="control-label required" for="credit_card_month">Exp. Month</label>
											<input type="text" id="credit_card_month" name="credit_card[month]"  required="required" data-stripe="exp-month" data-seriesone-mask="month" placeholder="MM" class="form-control" />
										</div>
									</div>
									<div class="col-3">
										<div class="form-group">
											<label class="control-label required" for="credit_card_year">Exp. Year</label>
											<input type="text" id="credit_card_year" name="credit_card[year]"  required="required" data-stripe="exp-year" data-seriesone-mask="year" placeholder="YYYY" class="form-control" >
										</div>
									</div>
							</div>		
					
							<div class="row">
								<div class="col-12 col-twelve">
									<div class="form-group">
										<div class="checkbox">
										<label for="credit_card_agree" class="required">
										<input type="checkbox" id="credit_card_agree" name="credit_card[agree]"  required="required" value="1" />
										Your credit or debit card will be charged immediately. Refunds are subject to a case by case review by the issuer; transactions are generally not refundable.</label>
										</div>
									</div>
								</div>
							</div>
	
							<div class="row">
								<div class="col-12 col-twelve">
									<div class="form_buttons">
										<a href="/deal/anton-regcf/invest/a050t000003onrIAAQ/agreement" class="button prev_button">Previous</a>
										<button type="submit" id="credit_card_next" name="credit_card[next]" class="button">Next</button>
									</div>
									<input type="hidden" id="credit_card__token" name="credit_card[_token]" class="form-control" value="" >
								</div>
							</div>		
						</form>

						</section>
						<!-- /END CREDIT CARD -->
		
				</form>
			</div>	
		</div>	
	</div>	
</section>

<script src="<?php bloginfo('template_directory');?>/js/select-togglebutton.js"></script>

<script>
	
	jQuery('select.funding_source').togglebutton();
	
</script>	

<?php get_footer();?>
