<?php 
/* Template Name: Step 5 - Success Message   */
get_header();?>

<section class="page_content">
	<div class="container">
		<div class="row">
			<div class="col-12 col-twelve">
				<h2>Congratulations!</h2>
				
				<section class="success_message">	
              	  <p> Your investment commitment is in! Since you have chosen to fund your investment via <span class="if_cc">credit card</span><span class="if_ach">ACH</span><span class="if_wire">Wire Transfer</span>, funds will be drawn from your account automatically in 1-2 business days. You will be sent an e-mail when your funds have been received and further instructions if we need anything else. Thank you!</p> 
                <p>If you have any questions or need further assistance, please contact <a href="mailto:info@hightimesinvestor.com" class="blue-link">info@hightimesinvestor.com</a></p>	
				</section>
				
			
			<!-- If ACH -->	
			<section class="success_ach success_details">
			   <h3> ACH Transfer Details </h3>
			    <p>Funds will be drawn from the following account in 1-2 business days:</p>
				<ul>
				    <li class="bank_name"><label>Bank Name:</label> <span>CHARLES SCHWAB BANK</span></li>
				    <li class="account_name"><label>Name on Bank Account:</label> <span>Alex Pashinin</span></li>
				    <li class="account_number"><label>Account Number: </label><span>********3456</span></li>
				    <li class="routing_number"><label>Routing Number: </label><span>121202211</span></li>
				    <li class="amount"><label>Amount: </label><span>$1,000.00</span></li>
				</ul>
			</section>	
			<!-- /END ACH -->	
			
			<!-- IF CREDIT CARD -->
			<section class="sucess_wire success_details">
			   <h3> Wire Transfer Details </h3>
			    <p>Investor’s bank account name must match investor’s name. Our escrow trustee, Prime Trust, cannot accept Western Union wires. When setting up the online transfer, please remember to include the reference number shown below.</p>
				<ul>
				    <li class="amount"><label>Amount: </label><span>$1,000.00</span></li>
					<li class="bank_name"><label>Bank Name:</label> <span>CHARLES SCHWAB BANK</span></li>
				    <li class="account_name"><label>Name on Bank Account:</label> <span>Alex Pashinin</span></li>
				    <li class="account_number"><label>Account Number: </label><span>********3456</span></li>
				    <li class="routing_number"><label>Routing Number: </label><span>121202211</span></li>
					
				    <li class="recipient_name"><label>Recipient:</label> <span>Prime Trust as Escrow Agent for Anton RegCF</span></li>
				    <li class="recipient_account_number"><label>Recipient Account Number:</label> <span>13525788</span></li>
				    <li class="routing_aba"><label>Routing ABA:</label> <span>122105980<span></li>
				    <li class="recipient_address"><label>Recipient Address:</label><span>10890 S Eastern Ave<br />Suite 114<br />Henderson, NV 89502</span></li>
				    <li class="bank_name"><label>Bank Name:</label> <span>Western Alliance Bank</span></li>
					<li class="bank_address">
						<label>Bank Address:</label>
				     	<span>One East Washington Street<br />Phoenix AZ 85004</span>
					</li>
					<li class="wire_reference"><label>Reference: </label><span>BBFXUS6S</span></li>
				</ul>
			</section>
			<!-- /END CREDIT CARD -->
			
             <div class="form_buttons">
			 	 <a href="<?php bloginfo('url');?>/my-account/" class="button done_button">Done</a>
		 	 </div>
			</div>	
		</div>	
	</div>	
</section>

<?php get_footer();?>
