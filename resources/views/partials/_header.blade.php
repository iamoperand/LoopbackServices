<header id="genit-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header"> 
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-genit-nav-toggle genit-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#genit-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
				<a class="navbar-brand" href="index">Incord Solutions</a>
				</div>
				<div id="genit-navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"><span>Home <span class="border"></span></span></a></li>
						<li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}"><span>About <span class="border"></span></span></a></li>
						<li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ url('/services') }}"><span>Services <span class="border"></span></span></a></li>
						<li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}"><span>Contact <span class="border"></span></span></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- END .header -->