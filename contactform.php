<!doctype HTML>
<html>
<head>
</head>
<body>
	<div class="container" style="padding-bottom: 200px;">
		<div class="row">
			<div class="col-xl-8 offset-xl-2 py-5">
				<h1>Contact Me</h1>
				<form id="contact-form" method="post" action="sendemail.php"
					role="form">
					<div class="messages"></div>
					<div class="controls">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input id="contact_form" type="text" name="first_name"
										class="form-control" placeholder="First Name"
										required="required" data-error="First Name is required."> <br>
									<input id="contact_form" type="text" name="last_name"
										class="form-control" placeholder="Last Name"
										required="required" data-error="Last Name is required."><input
										type="submit" class="btn btn-success btn-send"
										value="Send Email">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="resources/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="resources/js/popper.min.js"></script>
	<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="resources/js/mdb.min.js"></script>
</body>
</html>