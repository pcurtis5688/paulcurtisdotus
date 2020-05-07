<div style="text-align: center; color: gold; padding-top: 7%;">
	<?php //TODO: Turn these into buttons. ?>
	<a href="mailto:pcurtis5688@gmail.com" style="color: gold;"><button
			type="button" class="btn btn-secondary rounded">[Email:
			pcurtis5688@gmail.com]</button></a><br> <a href="tel:1-412-716-0747"
		style="color: gold;"><button type="button"
			class="btn btn-secondary rounded">[Dial Cell: 412-716-0747]</button></a><br>
	<a href="tel:1-484-442-0052" style="color: gold;"><button type="button"
			class="btn btn-secondary rounded">[Dial Office: 484-442-0052]</button></a><br>
	<br> <q>OR... you may use this convenient form to shoot me a message
		with all of your details. :)</q> <br> <br>
	<form id="contact-form" method="post" action="../scripts/sendemail.php"
		role="form">
		<div class="messages"></div>
		<div class="controls">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<?php //TODO: Fix functionality & size of textarea ?>
						<input id="contact_form" type="text" name="first_name"
							class="form-control" placeholder="[First Name]"
							required="required" style="margin-bottom: 10px;"
							data-error="First Name is required."><input id="contact_form"
							type="text" name="last_name" style="margin-bottom: 10px;"
							class="form-control" placeholder="[Last Name]"
							required="required" data-error="Last Name is required."><input
							style="margin-bottom: 10px;" id="contact_form" type="text"
							name="email_re" class="form-control" placeholder="[Your Email]"
							required="required" data-error="Last Name is required."> <input
							type="textarea" height="20"
							placeholder="Your message goes right here..."
							data-error="Message is required." /><br> <input type="submit"
							class="btn btn-primary btn-send" value="Send Email"><br>
						<div class="help-block with-errors"></div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="resources/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="resources/js/popper.min.js"></script>
<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
<script type="text/javascript" src="resources/js/mdb.min.js"></script>