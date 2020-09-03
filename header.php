<!doctype html>
<html lang="en">
<head>
        <title>X-Industries</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        

        <?php wp_head();?> <!-- for wordpress -->
        
</head>
<body>

<header class="header_area">
        <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container box_1620">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                                
                                 <!-- wp_nav_menu (
                                        array(
                                                'theme_location' => 'top-menu',
                                                // 'menu_id' => 'main-menu', //Use id=main-menu
                                                'container' => 'ul',
                                                'menu_class' => 'nav navbar-nav menu_nav justify-content-center'
                                        )
                                ) -->

					<ul class="nav navbar-nav menu_nav justify-content-center">
						<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
						<li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 								
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Innovations</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="portfolio.html">Bioengineering</a>
								<li class="nav-item"><a class="nav-link" href="portfolio-details.html">Computer Science</a>
								<li class="nav-item"><a class="nav-link" href="elements.html">A.I</a></li>
							</ul>
						</li> 
						<li class="nav-item"><a class="nav-link" href="service.html">News</a>
						<li class="nav-item"><a class="nav-link" href="service.html">Career</a>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                        </ul>	
                                        						
					<form method="get" action="/search" id="search">
						<input name="q" type="text" size="40" placeholder="Search..." class="fa fa-search" />
					</form>
				</div> 
			</div>
            	</nav>
        </div>
</header>






