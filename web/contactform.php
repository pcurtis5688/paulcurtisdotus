<div style="text-align: center; color: gold;">
	<?php //TODO: Fix email functionality ?>
	<a href="mailto:pcurtis5688@gmail.com">
		<button type="button" class="btn btn-secondary rounded"
			style="color: gold;">[Email: pcurtis5688@gmail.com]</button>
	</a> <br> <a href="tel:1-412-716-0747">
		<button type="button" class="btn btn-secondary rounded"
			style="color: gold;">[Dial Cell: 412-716-0747]</button>
	</a> <br> <a href="tel:1-484-442-0052">
		<button type="button" class="btn btn-secondary rounded"
			style="color: gold;">[Dial Office: 484-442-0052]</button>
	</a> <br> <br>
	<form id="contact-form" method="post" action="./scripts/sendemail.php"
		role="form">
		<div class="messages"></div>
		<div class="controls">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<input id="contact_form" type="text" name="first_name"
							class="form-control" placeholder="[First Name]"
							required="required" style="margin-bottom: 10px;"
							data-error="First Name is required."><input id="contact_form"
							type="text" name="last_name" style="margin-bottom: 10px;"
							class="form-control" placeholder="[Last Name]"
							required="required" data-error="Last Name is required."><input
							style="margin-bottom: 10px;" id="contact_form" type="text"
							name="email_re" class="form-control" placeholder="[Your Email]"
							required="required" data-error="Last Name is required.">
						<textarea cols="125" rows="5" id="contact_form" name="visitor_msg"
							placeholder="Your message goes right here..."
							data-error="Message is required." />
						<br> <input type="submit" class="btn btn-primary btn-send"
							value="Send Message"><br>
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