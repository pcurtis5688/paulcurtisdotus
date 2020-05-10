<div class='text-md-center'>
	<div class='row'>
		<div class='col-md-4'>
			<a href='mailto:pcurtis5688@gmail.com'>
				<button type='button'
					class='btn btn-secondary rounded goldAsPrimary'>pcurtis5688@gmail.com</button>
			</a>
		</div>
		<div class='col-md-4'>
			<a href='tel:1-412-716-0747'>
				<button type='button'
					class='btn btn-secondary rounded goldAsPrimary'>[Dial Cell:
					412-716-0747]</button>
			</a>
		</div>
		<div class='col-md-4'>
			<a href='tel:1-484-442-0052'>
				<button type='button'
					class='btn btn-secondary rounded goldAsPrimary'>[Dial Office:
					484-442-0052]</button>
			</a>
		</div>
	</div>
	<form id='contact-form' method='post' action='./scripts/sendemail.php'
		role='form' class='md-form'>
		<div class='messages'></div>
		<div class='controls form-group'>
				<?php //TODO: finish completing material design form ?>
				<div class='row marginBottomTwoEM'>
				<div class='col-md-6'>
					<input mdbInput id='contact_form' type='text' name='first_name'
						class='form-control' required='required'
						data-error='First Name is required.'><label for='contact_form'
						class=''>First Name</label>
				</div>
				<div class='col-md-6'>
					<input mdbInput id='contact_form' type='text' name='last_name'
						class='form-control' required='required'
						data-error='Last Name is required.'><label for='contact_form'
						class=''>Last Name</label>
				</div>
			</div>
			<div class='row marginBottomTwoEM'>
				<div class='col-md-12 paddingLR75'>
					<input id='contact_form' type='text' name='email_re'
						class='form-control' required='required'
						data-error='Return email is required.'>
				</div>
			</div>
			<div class='row marginBottomTwoEM'>
				<div class='col-md-12 paddingLR75'>
					<textarea rows='5' id='contact_form' name='visitor_msg'
						class='form-control' placeholder='Your message goes right here...'></textarea>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12 paddingLR75'>
					<input type='submit' class='btn btn-primary btn-send goldAsPrimary'
						value='Send Message'>
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