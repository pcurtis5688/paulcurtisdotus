<div class='text-md-center'>
	<div class='row'>
		<div class='col-md-4'>
			<a href='mailto:pcurtis5688@gmail.com' class='goldAsPrimary'>
				<button type='button'
					class='btn btn-secondary rounded goldAsPrimary'>
					pcurtis5688@gmail.com</button>
			</a>
		</div>
		<div class='col-md-4'>
			<a href='tel:4127160747'>
				<button type='button'
					class='btn btn-secondary rounded goldAsPrimary'>[Dial Mobile: (+1)
					412-716-0747]</button>
			</a>
		</div>
		<div class='col-md-4'>
			<a href='tel:4127160747'>
				<button type='button'
					class='btn btn-secondary rounded goldAsPrimary'>[Dial Office: (+1)
					484-442-0052]</button>
			</a>
		</div>
	</div>
	<?php //TODO: FINISH THE MATERIAL DESIGN OF CONTACT FORM?>
	<form id='contact-form' method='post' action='./scripts/sendemail.php'
		role='form' class='md-form'>
		<div class='messages'></div>
		<div class='controls form-group'>
			<div class='row'>
				<div class='col-md-6'>
					<input id='contact_form' type='text' name='first_name'
						class='form-control' required='required'
						data-error='First Name is required.'><label for='contact_form'
						class=''>First Name</label>
				</div>
				<div class='col-md-6'>
					<input id='contact_form' type='text' name='last_name'
						class='form-control' required='required'
						data-error='Last Name is required.'><label for='contact_form'
						class=''>Last Name</label>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12 '>
					<input id='contact_form' type='text' name='email_re'
						class='form-control' required='required'
						data-error='Return email is required.'><label for='contact_form'
						class=''>Email Address</label>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<div class='md-form'>
						<textarea rows='5' name='visitor_msg' id='contact_form'
							class='form-control' required='required'></textarea>
						<label for='contact_form'>Message</label>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<input type='submit' class='btn btn-primary btn-send goldAsPrimary'
						id='contact_form' value='Send Message'>
				</div>
			</div>
			<div class='help-block with-errors'></div>
		</div>
	</form>
</div>
<script type='text/javascript' src='resources/js/jquery-3.4.1.min.js'></script>
<script type='text/javascript' src='resources/js/popper.min.js'></script>
<script type='text/javascript' src='resources/js/bootstrap.min.js'></script>
<script type='text/javascript' src='resources/js/mdb.min.js'></script>