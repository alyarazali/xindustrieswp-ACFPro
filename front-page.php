

<?php get_header();?>

<?php $hero = get_field('hero');?>

<section class="bgi home_banner_area" >
				

				<div class="container h-100" >
                                

                        <div class="slider_text" data-aos="fade-right">
			        <h5><b><?php echo $hero['small_title'];?></b></h5>
                                <h1>CHANGING THE WORLD <br>
                                        <span>FOR A BETTER FUTURE</span>
                                </h1>
				<h6><b><?php echo $hero['smaller_title'];?></b></h6>
                        <!-- <a class="boxed-btn3-line" href="#">View Works</a> -->
                        </div>
                    <!-- </div> -->
                    
					<!-- </div> -->
					<div class="my_img d-none d-lg-block">
                        <img data-aos="fade-left" src="<?php bloginfo('template_directory');?>/images/slider/tower2.png" alt="">
                    </div>
					</div>
		


			
																
        </section>
        <!--================End Home Banner Area =================-->
		
		<?php if( have_rows('innovations') ): ?>

<section class="hcard" >


<?php while( have_rows('innovations') ): the_row(); 

$image = get_sub_field('image');
$title = get_sub_field('title');
$description = get_sub_field('description');
$link = get_sub_field('link');

?>

<div class="card" data-aos="fade-up">
	<div class="card-img" style="background-image:url(<?php echo $image['url'];?>);">
		<div class="overlay">
			<div class="overlay-content">
									 
										<a class="hover" href="<?php echo $link;?>">Learn More</a>
										
			</div>
		</div>
	</div>
		
	<div class="card-content">
		<a href="#!">
			<h2><?php echo $title;?></h2>
				<p><?php echo $description;?></p>
		</a>
	</div>
				</div>



<?php endwhile; ?>


</section>

<?php endif; ?>
		       
        <!--================Success Area =================-->

        <?php $about = get_field('about');?>
        <?php $about_2 = get_field('about_2');?>

        <section class="success_area">
        	<div class="row m0">
			<div class="col-lg-6 p0">
        			<div class="mission_text" data-aos="fade-up">
					<h4><?php echo $about['title'];?></h4>
					<p><?php echo $about['description'];?></p>
				</div>
        		</div>    
				<div class="col-lg-6 p0">
        			<div class="success_img">
                                        <img src="<?php echo $about['right_image'];?>" alt="">      
        			</div>
        		</div>       				
        	</div>
			
        	<div class="row m0 right_dir">				
        		<div class="col-lg-6 p0">
        			<div class="success_img">
        				<img src="<?php echo $about_2['left_image'];?>" alt="">
        			</div>
                        </div>  
                        
			<div class="col-lg-6 p0">
        			<div class="mission_text" data-aos="fade-up">
					<h4><?php echo $about_2['title'];?></h4>
					<p><?php echo $about_2['description'];?></p>
				</div>
        		</div>
        	</div>
        </section>
		
		<section class="ths">
		<div class="container">
				<h3 class="biot" >Meet the faces of x industries</h3>
			<div class="row bio" >	
				<div class="icard" data-aos="fade-up">					
					<div class="grid-item">
						<img class="wd" src="<?php bloginfo('template_directory');?>/images/blog/c2.jpg" alt="Jane" >    
					</div>
					
					<div class="grid-item">	
						<h4>John Smith</h4>
						<p class="title">Owner & Chairman</p>
						<p>Some text va ofiyvba foivyadfoiyva dfviahdfv cribes me lorem ipsum ipsum lorem.</p>
					</div>         
				</div>

				<div class="icard" data-aos="fade-up">					
					<div class="grid-item">
						<img class="wd" src="<?php bloginfo('template_directory');?>/images/blog/c1.jpg" alt="Jane" >    
					</div>
					
					<div class="grid-item">	
						<h4>Jane Doe</h4>
						<p class="title">Chief Executive Officer</p>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					</div>         
				</div>
				
				<div class="icard" data-aos="fade-up">					
					<div class="grid-item">
						<img class="wd" src="<?php bloginfo('template_directory');?>/images/blog/c5.jpg" alt="Jane" >    
					</div>
					
					<div class="grid-item">	
						<h4>Mike Henson</h4>
						<p class="title">Chief Finance Officer</p>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
				
					</div>         
				</div>
			</div>
			
			
			</div>	
		</section>
		
		<section class="bgf">
		<div class="t3">
			<h3>LATEST NEWS</h3>
		</div>
		<div class="hcard">
			<div class="card ">
				<div class="card-img lna" >
					<div class="overlay">
						<div class="overlay-content">
							<a class="hover" href="#!">View Project</a>
						</div>
					</div>
				</div>				
				<div class="test card-content">
					<a href="#!">
						<h2>New Project</h2>
						<p>Lorem ipsum dolor sit amet consectetur, lorem ipsum dolor</p>
					</a>
				</div>
			</div>

			<div class="card">
				<div class="card-img lnb" >
					<div class="overlay">
						<div class="overlay-content">
							<a href="#!">View Project</a>
						</div>
					</div>
				</div>
				
				<div class="test card-content">
					<a href="#!">
						<h2>Title</h2>
						<p>Lorem ipsum dolor sit amet consectetur, lorem ipsum dolor</p>
					</a>
				</div>
			</div>

			<div class="card">
				<div class="card-img lnc" >
					<div class="overlay">
						<div class="overlay-content">
							<a href="#!">View Project</a>
						</div>
					</div>
				</div>
				
				<div class="test card-content">
					<a href="#!">
						<h2>Title</h2>
						<p>Lorem ipsum dolor sit amet consectetur, lorem ipsum dolor</p>
					</a>
				</div>
			</div>
			</div>
		<div class="container center-text">
		<button type="button" class="btn btn-info">View More</button>
		</div>
		
		
			<section class="nd">
			<div class="container">
				<div class="row cntc">
					<div class="col-12 fg " data-aos="fade-up" data-aos-duration="950">
					  <h2 class="contact-title">CONTACT US</h2>
					  <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="row">						  
						  <div class="col-sm-6">
							<div class="form-group">
							  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
							</div>
						  </div>
						  <div class="col-sm-6">
							<div class="form-group">
							  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
							</div>
						  </div>
						  <div class="col-12">
							<div class="form-group">
							  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
							</div>
						  </div>
						  <div class="col-12">
							<div class="form-group">
							  
								<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
							</div>
						  </div>
						</div>
						<div class="form-group mt-3 center-text">
						  <button type="submit" class="button button1">Send Message</button>
						</div>
					  </form>
					</div>
					
		</div>
			</section>
		</section>

<?php get_footer();?>








