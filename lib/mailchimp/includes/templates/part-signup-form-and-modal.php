<?php

/**
* May as well keep these forms together,
* with the footer display, and the modal in the same partial
* this will make edits and messaging easier to find.
*/

 ?>
<div class="footer_signup_form">
	<h2> Here is the footer modal version </h2>
	<div class="email-form">
		<form data-action="email-signup" class="" action="" method="post">
			<div data-source="message" class="alert hide" role="alert"></div>
			<input type="email" value="" name="email" placeholder="Enter your email here" />
			<div style="position: absolute; left: -5000px;" aria-hidden="true">
  					<input type="text" name="b_6ddb37f55f770bce2b8d6e9d9_d075c46e3a" tabindex="-1" value="">
			</div>
			<input type="submit" name="Sign Up" value="Sign up">
		</form>
	</div>
	<div class="success-message hide">
		<h2>Thank you!</h2>
		<p>You are all signed up!</p>
	</div>
</div>

<!-- Subscribe Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<div class="email-form">
			<h2>Meet The Kitchen21</h2>
	        <p>
	          We can’t wait to share some seriously stylish, inspiring and down right funny stuff with you!
	        </p>
			<form data-action="email-signup" class="" action="" method="post">
				<div data-source="message" class="alert hide" role="alert"></div>
				<input type="email" value="" name="email" placeholder="Enter your email here" />
				<div style="position: absolute; left: -5000px;" aria-hidden="true">
  					<input type="text" name="b_6ddb37f55f770bce2b8d6e9d9_d075c46e3a" tabindex="-1" value="">
  				</div>
				<input type="submit" name="Sign Up" value="Sign up">
			</form>
		</div>
		<div class="success-message hide">
			<h2>Thank you!</h2>
			<p>You are all signed up!</p>
		</div>
    </div>
  </div>
</div><!-- .modal fade -->
