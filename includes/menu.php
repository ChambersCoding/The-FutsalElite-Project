<div class="content col-lg-10 col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important; padding:0px;">
	
		<div class="content ">
				<ul id="sdt_menu" class="sdt_menu">
						<li >
						<a href="index.php">
							<img src="images/home_menupicture.jpg" alt=""/>
							<span class="sdt_active"></span>
							<span class="sdt_wrap">
								<span class="sdt_link">Home</span>
								<span class="sdt_descr">Homepage</span>
							</span>
						</a>
					</li>
					<li>
						<a href="aboutus.php">
							<img src="images/logo.jpg" alt=""/>
							<span class="sdt_active"></span>
							<span class="sdt_wrap">
								<span class="sdt_link">About Us</span>
								<span class="sdt_descr">More about Futsal Elite</span>
							</span>
						</a>
						<div class="sdt_box">
								<a href="aboutus.php">About Us </a>
								<a href="ourcoaches.php">Our Coaches</a>
								<a href="partypackages.php">Birthday Packages</a>
						</div>
					</li>
					<li>
						<a href="clublocations.php">
							<img src="images/futsalclubs_menupicture.jpg" alt=""/>
							<span class="sdt_active"></span>
							<span class="sdt_wrap">
								<span class="sdt_link">Futsal Clubs</span>
								<span class="sdt_descr">Our Club Locations</span>
							</span>
						</a>
						<div class="sdt_box">
								<a href="holidayclubs.php">Holiday Practice Clubs</a>
								<a href="clublocations.php">Club Locations</a>
						</div>
					</li>
					<li>
						<a href="training.php">
							<img src="images/training_menupicture.jpg" alt=""/>
							<span class="sdt_active"></span>
							<span class="sdt_wrap">
								<span class="sdt_link">Training</span>
								<span class="sdt_descr">Personalised Improvement Programmes</span>
							</span>
						</a>
						<div class="sdt_box">
							<a href="training.php">1:1 Training</a>
						</div>
					</li>
					<li>
						<a href="gallery.php">
							<img src="images/gallery_menupicture.jpg" alt=""/>
							<span class="sdt_active"></span>
							<span class="sdt_wrap">
								<span class="sdt_link">Gallery</span>
								<span class="sdt_descr">Lights, Surface, Ball & Action</span>
							</span>
						</a>
					</li>
					<li>
						<a href="contactus.php">
							<img src="images/contactus_menupicture.png" alt=""/>
							<span class="sdt_active"></span>
							<span class="sdt_wrap">
								<span class="sdt_link">Contact Us</span>
								<span class="sdt_descr">Get in touch</span>
							</span>

						</a>
						<div class="sdt_box">
							<a href="contactus.php">Email</a>
							<a href="https://twitter.com/futsalelite" target="_blank">Twitter</a>
							<a href="https://www.facebook.com/pages/Futsal-Elite/224731790912865" target="_blank">Facebook</a>
							<a href="https://instagram.com/futsalelite/" target="_blank">Instagram</a>
							<a href="https://www.youtube.com/user/FutsalEliteTV" target="_blank">FutsalEliteTV</a>
						</div>
					</li>
				</ul>
				</div>
	       <div>
	 
		</div>
	</div>
		
<script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'100%',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '100%';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-100%';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px'},500);
				});
            });
        </script>   
