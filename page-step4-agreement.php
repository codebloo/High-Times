<?php 
/* Template Name: Step 4 - Agreement    */
get_header();?>

<section class="page_content">
	<div class="container">
   		<div class="row">
   			<div class="col-12">
			<section class="sign_agreement">
				<h3>Sign Subscription Agreement</h3>
				<div class="auto_populate">
					
					<div id="fa__subscriber_signature" class="fa__signature">
					  <h4>Subscriber</h4>
				
					  <table class="fa__signature_data fa__blank_signature_data">
					    <tr>
					      <th>By</th>
					      <td>______________________________</td>
					    </tr>
					    <tr>
					      <th>Name</th>
					      <td>______________________________</td>
					    </tr>
					    <tr>
					      <th>Title</th>
					      <td>______________________________</td>
					    </tr>
					  </table>
					</div>
					<div id="fa__issuer_signature" class="fa__signature">
					  <h4>Issuer</h4>
			
					  <table class="fa__signature_data fa__blank_signature_data">
					    <tr>
					      <th>By</th>
					      <td>______________________________</td>
					    </tr>
					    <tr>
					      <th>Name</th>
					      <td>______________________________</td>
					    </tr>
					    <tr>
					      <th>Title</th>
					      <td>______________________________</td>
					    </tr>
					  </table>
					</div>
				</div>	
				
                <div class="agreement_actions">
                    <a href="downloadagreement.pdf" target="_blank"><i class="fa fa-download"></i></a>
                    <a href="printagreement.pdf"><i class="fa fa-print"></i></a>
                </div>
					 
			<div class="agreement_sign">		 
				<label for="agreement_signature">Type signature to sign the agreement: <span>Alex Pashinin</span></label>
				<input type="text" id="agreement_signature" name="agreement[signature]"  required="required" class="form-control" />
			</div>	
			</section>
			
			</div>		</div>			
			</div>	
</section>

<?php get_footer();?>
