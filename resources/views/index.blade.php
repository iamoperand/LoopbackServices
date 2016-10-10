@include('partials._head')


	<body>
		

	@include('partials._header')

	
<div class="container-fluid" style="padding-right:0px; padding-left:0px;">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:37px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/Home.jpg" alt="Home" class="img-responsive">
        
      </div>
     <div class="item">
        <img src="images/Network-Monitoring.jpg" alt="Network Monitoring">
        <div class="carousel-caption">
          <h3 style="font-weight:700;font-family: 'Voltaire', sans-serif;font-size:1.9em;color:white;">Network Monitoring</h3>
          
        </div>
      </div>

      <div class="item">
        <img src="images/Network-Design.jpg" alt="Network Design">
        <div class="carousel-caption">
          <h3 style="font-weight:700;font-family: 'Voltaire', sans-serif;font-size:1.9em;color:white;">Network Design</h3>
      
        </div>
      </div>
    
      <div class="item">
        <img src="images/Network-Security.jpg" alt="Network Security">
        <div class="carousel-caption">
          <h3 style="font-weight:700;font-family: 'Voltaire', sans-serif;font-size:1.9em;color:white;">Network Security</h3>
          
        </div>
      </div>

      <div class="item">
        <img src="images/Disaster-Recovery.jpg" alt="Disaster Recovery">
        <div class="carousel-caption">
          <h3 style="font-weight:700;font-family: 'Voltaire', sans-serif;font-size:1.9em;color:white;">Disaster Recovery</h3>
          
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


	
	<!-- <div class="genit-slider">
		<div class="owl-carousel owl-carousel-fullwidth">
		    <div class="container">
                           <div class="row">
		    	<img src="images/Home.jpg" class="img-responsive">
                       </div>		    
                     </div>
			<div class="item" style="background-image:url(images/network-monitoring.jpg)">
		    	<div class="genit-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="genit-owl-text-wrap">
						    	<div class="genit-owl-text text-center to-animate">
						    		<h1 class="genit-lead" style="font-weight:700;font-family: 'Voltaire', sans-serif;font-size:2.9em;">Network Monitoring</h1>
									<h2 class="genit-sub-lead"></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		    <div class="item" style="background-image:url(images/Network-Design.jpg)">
		    	<div class="genit-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="genit-owl-text-wrap">
						    	<div class="genit-owl-text text-center to-animate">
						    		<h1 class="genit-lead" style="font-weight:700;font-family: 'Voltaire', sans-serif;font-size:2.9em;">Network Design<br />and Optimization</h1>
									<h2 class="genit-sub-lead"></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		    <div class="item" style="background-image:url(images/Network-Security.jpg)">
		    	<div class="genit-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="genit-owl-text-wrap">
						    	<div class="genit-owl-text text-center to-animate">
						    		<h1 class="genit-lead" style="font-weight:700;font-family: 'Voltaire', sans-serif;font-size:2.9em;">Network Security</h1>
									<h2 class="genit-sub-lead"></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		    <div class="item" style="background-image:url(images/disaster-recovery.jpg)">
		    	<div class="genit-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="genit-owl-text-wrap">
						    	<div class="genit-owl-text text-center to-animate">
						    		<h1 class="genit-lead" style="font-weight:700;font-family: 'Voltaire', sans-serif;font-size:2.9em;">Disaster Recovery</h1>
									<h2 class="genit-sub-lead"></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		</div>
	</div> -->	
	<div id="genit-main">
		<!-- Services -->

		<div id="genit-features">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="genit-section-lead">Services</h2>
						<!--<h3 class="genit-section-sub-lead"></h3>-->
					</div>
					<div class="genit-spacer genit-spacer-md"></div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 genit-feature-border">
						<div class="">
							<div class="col-md-12 col-sm-12">
								<div class="text-center" style="text-align: -moz-center;">
									<img src="images/monitoring.png" alt="Network Monitoring" class="img-rounded img-responsive" style="margin: 0 auto;">
									
								</div>
										
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="genit-feature-text text-center" style="text-align: -moz-center;">
									<h3>Network Monitoring</h3>
									<div class="text-center">
										
											<h4><span class="glyphicon glyphicon-ok"></span> &nbsp; Real-time Monitoring<br></h4>
											<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span> &nbsp; Real-time Reports / Graphs<br></h4>
											<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span> &nbsp; Historic Reports / Graphs<br></h4>
											<h4><span class="glyphicon glyphicon-ok"></span> &nbsp; Network Analysis</h4>
										
									</div>
									<p><a href="/public/services#network_monitoring">Read more</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="">
							<div class="col-md-12 col-sm-12">
								<div class="genit-feature-icon text-center" style="text-align: -moz-center;">
									<img src="images/design.png" class="img-rounded img-responsive" alt="Network Security" style="margin: 0 auto;">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
	                            <div class="genit-feature-text text-center" style="text-align: -moz-center;">
									<h3>Network Design and Optimization</h3>
									<div class="text-center">
										
											<h4><span class="glyphicon glyphicon-ok"></span> &nbsp; Network Design<br></h4>
											<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span> &nbsp; Network Implementation<br></h4>
											<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span> &nbsp; Network Diagrams<br></h4>
											<h4><span class="glyphicon glyphicon-ok"></span> &nbsp; Network Reviews</h4>
										
									</div>
									<p><a href="/public/services#network_design">Read more</a></p>
									<br>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 genit-feature-border">
						<div class="">
							<div class="col-md-12 col-sm-12">
								<div class="genit-feature-icon text-center" style="text-align: -moz-center;">
									<img src="images/security.png" class="img-rounded img-responsive" alt="Network Design & Optimization" style="margin: 0 auto;">
								</div>
							</div>	
							<div class="col-md-12 col-sm-12">
								<div class="genit-feature-text text-center" style="text-align: -moz-center;">
									<h3>Network Security</h3>
									<div class="text-center">
										
											<h4><span class="glyphicon glyphicon-ok"></span> &nbsp; Security Device Configuration<br></h4>
											<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span> &nbsp; Security Design Review<br></h4>
											<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span> &nbsp; VPN Configuration<br></h4>
											
										
									</div>
									<p><a href="/public/services#network_security">Read more</a></p>
								</div>
							</div>
						</div>
					</div>	
					<div class="col-md-6 col-sm-6 genit-feature-border">
						<div class="">
							<div class="col-md-12 col-sm-12">
								<div class="genit-feature-icon text-center" style="text-align: -moz-center;">
									<img src="images/recovery.png" class="img-rounded img-responsive" alt="Disaster recovery" style="margin: 0 auto;">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="genit-feature-text text-center" style="text-align: -moz-center;">
									<h3>Disaster Recovery</h3>
									<div class="text-center">
										
											<h4><span class="glyphicon glyphicon-ok"></span> &nbsp; Protection against equipment failures<br></h4>
											<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span> &nbsp; Protection against Natural Disasters<br></h4>
											<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span> &nbsp; Configurational Backups<br></h4>
											
										
									</div>
									<p><a href="/public/services#disaster_recovery">Read more</a></p>
									<br> 
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Services -->

				
			

	</div>





@include('partials._footer')
	

	
