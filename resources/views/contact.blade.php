@include('partials._head')
	<body>
		
@include('partials._header')
	
	<aside class="genit-page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="genit-page-heading-lead">
						Contact Us
						<span class="genit-border"></span>
					</h1>
					
				</div>
			</div>
		</div>
	</aside>
	
	<div id="genit-main">
		
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					
	       
					<p><strong>Customer feedback is the lifeblood of our business. Tell us what’s on your mind, good or bad.</strong></p>

					<p>We respond to all customer feedback and look forward to hearing from you!</p>
						       
					
					
					
					<div class="row">
						<form action="#" method="post">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name" class="sr-only">Email</label>
									<input placeholder="Name" id="name" type="text" class="form-control input-lg">
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input placeholder="Email" id="email" type="text" class="form-control input-lg">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="gender" class="sr-only">Gender</label>
									<select class="form-control input-lg" id="gender">
									  <option>--Gender--</option>
									  <option>Male</option>
									  <option>Female</option>
									</select>
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea placeholder="Message" id="message" class="form-control input-lg" rows="3"></textarea>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="submit" class="btn btn-primary " value="Send">

									<input type="reset" class="btn btn-outline  " value="Reset">
								</div>	
							</div>
						</form>	
					</div>


					
					
				</div>


				
			</div>
		</div>
	</div>

	<div class="genit-spacer genit-spacer-lg"></div>

	@include('partials._footer')