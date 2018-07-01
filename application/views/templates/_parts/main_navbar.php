		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark mdb-color darken-4">
			
			<!-- Navbar brand -->
            <img src="<?=base_url('assets/img/logo.png');?>" height="30" alt="">
			<a class="navbar-brand" href="<?=base_url('home');?>">Pukks.net</a>
			
			<!-- Collapse button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
			        aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<!-- Collapsible content -->
			<div class="collapse navbar-collapse" id="basicExampleNav">
				
				<!-- Links -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('home');?>">Home
                            <span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('music');?>">Music</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('tv-shows');?>">TV Shows</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('pukka-studios');?>">Pukka Studios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('about');?>">About</a>
                    </li>										<li class="nav-item">
                        <a class="nav-link" href="<?=base_url('contact');?>">Contact</a>
                    </li>
					<!-- Dropdown -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
						<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				
				</ul>
				<!-- Links -->
				
				<form class="form-inline">
					<div class="md-form my-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					</div>
				</form>
			</div>
			<!-- Collapsible content -->
		
		</nav>
		<!--/.Navbar-->