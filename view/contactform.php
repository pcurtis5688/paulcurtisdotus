<form id="contact-form" method="post"
	action="./pcdusresources/script/pcdus-send-email.php" role="form"
	class="md-form" style="margin-left: 7%; margin-right: 7%;">
	<div class="text-xxl-center">
		<div class="row">
			<div class="col-md-4">
				<a href="mailto:pcurtis5688@gmail.com">
					<button type="button" class="btn btn-secondary rounded colorGold">pcurtis5688@gmail.com</button>
				</a>
			</div>
			<div class="col-md-4">
				<a href="tel:4127160747" class="colorGold">
					<button type="button" class="btn btn-secondary rounded colorGold">Cell:
						(412) 716-0747</button>
				</a>
			</div>
			<div class="col-md-4">
				<a href="tel:4127160747" class="colorGold">
					<button type="button" class="btn btn-secondary rounded colorGold">Work:
						(484) 442-0052</button>
				</a>
			</div>
		</div>
		<div class="messages"></div>
		<div class="controls form-group">
			<div class="row">
				<div class="col-md-6" style="">
					<input id="contact_form" type="text" name="first_name"
						class="form-control" required="required"
						data-error="First Name is required."><label for="contact_form"
						class=""
						style="color: gold; margin-left: auto; margin-right: auto;">First
						Name</label>
				</div>
				<div class="col-md-6">
					<input id="contact_form" type="text" name="last_name"
						class="form-control" required="required"
						data-error="Last Name is required."><label for="contact_form"
						class="" style="color: gold;">Last Name</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 ">
					<input id="contact_form" type="text" name="email_re"
						class="form-control" required="required"
						data-error="Return email is required."><label for="contact_form"
						class="" style="color: gold;">Email Address</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="md-form">
						<textarea rows="5" name="visitor_msg" id="contact_form"
							class="form-control" required="required" style="color: gold;"></textarea>
						<label for="contact_form" class="" style="color: gold;"><span
							style="color: gold;">Message</span></label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<input type="submit" class="btn btn-primary btn-send colorRed"
						id="contact_form" value="Send Message">
				</div>
			</div>
			<?php /* TODO: Do all form validation and match with database*/?>
			<div class="help-block with-errors"></div>
		</div>
	</div>
</form>
<script type="text/javascript" src="resources/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="resources/js/popper.min.js"></script>
<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
<script type="text/javascript" src="resources/js/mdb.min.js"></script>