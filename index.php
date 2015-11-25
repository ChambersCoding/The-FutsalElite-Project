

<?php 

include 'includes/head.php';
include 'includes/menu.php';
include 'includes/functions.php';

?>	


<?php   


function output_errors($errors) {
    $output = array();
    foreach($errors as $error) {
        $output[] = '<li style=" background: #F1C4C4; padding: 10px; border: 3px solid red;color: #040303; margin-left: -60px !important; margin-right: -22px;">' . '<center>' . $error . '</center>' . '</li>'  .'<br>';
    }
    
    return '<ul style=" list-style-type:none;">' . implode('', $output) . '</ul>';
        }
            if (empty($_POST) === false) {
                if (empty($_POST['name']) === true) {
                    $errors[] = 'Your name is required.';
            }
                if (empty($_POST['email']) === true) {
                $errors[] = 'Your email address is required.';
                
            }
             
            if (empty($errors) === false) {
                echo output_errors($errors);
            } else {
            subscribe($_POST['name'], $_POST['email'], $_POST['message'], $headers);
            header ("Location: index.php?subscribed");
            exit();
                  }
             }   

        
?>
   

<div class="maincontainer col-lg-10 col-md-10 col-sm-10 col-xs-10"><!--  maincontainer starts here -->
<?php if (isset($_GET['subscribed']) ) {
                echo 
                '<div style="background:#44B23D;color:black; padding: 10px; text-align:center;"> 
                <p><strong>You have successfully subscribed to our newsletter campaign. We will be in touch shortly with great news! </strong> 
                </p> 
                </div><br>';
            } ?>

<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=192927687570041";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="slider">
	<img src="images/futsalelite_banner.jpg" />
	<img src="images/kidscloseshot_banner.jpg" />
	<div><img src="images/twitter_banner.jpg" style="width:100%" />
	<!-- 		<div class="title">
			<div class="background black"></div>
			<h2 class="dark">This one's got a title.</h2>
			</div> -->
		</div>
	</div>	

	<div class="col-xs-12 col-sm-12 col-md-8" style="margin-top: 20px;">
	<!-- <h1>Welcome to FutsalElite</h1> -->
	<p>Futsal is intense and exhilarating, as defence turns into attack at breath-taking speed, an action packed game which keeps players physically active whilst having fun is born!</p>
	<p>Futsal is played with a half size and heavier ball on a small court. Having a small playing area forces all players to fully participate and be involved, which in turn fast-tracks 
	the attainment of technique... <a href="aboutus.php">(read more)</a></p>
	<h2>What Futsal means to us?</h2>
	<p>The sport places an emphasis on greater concentration, responsiveness, the improvement of skilful dribbling, accurate passing and ball control.
	Moreover, Futsal generates an environment that demands players to think quickly and make quick decisions. </p>
	<iframe width="100%" height="500px" src="https://www.youtube.com/embed/hyUJOVV39Io" frameborder="0" allowfullscreen></iframe>
	
	<p>In all Futsal injects quality skills, game awareness and speed into player’s blood, mind, body and soul, improving Agility, Balance, Co-ordination and Speed.
	</p>

	<h2>Testimonials</h2>
		<div id="testimonials">

				<blockquote>
				<p>"Ali thoroughly enjoys attending the sessions every Wednesday. Since joining the club, Ali has socially benefited by making many friends. There is always a great buzz in the sessions 
				and the boys enjoy competing in a friendly yet professional and structured environment. Ali enjoys working with the coaches who ensure to equip the boys with life- long skills such as 
				agility, speed, balance and co-ordination. "
				<cite>&ndash;Zahara Tayeb</cite></p></blockquote>
				
				<blockquote>
				<p>"George (11) has loved futsal with Futsal Elite. He has said it has improved his skills and his confidence to use them in a game, both futsal and football.
				 He loved the recent tournament and having a team of new friends. The coaches always give a comment for improvement at the end of the session and this gives him
				  something to work on for next time. Stanley (4) has enjoyed the skills and getting some confidence in a game. I love the way the other boys praise and help him too. 
				 It has really helped his football, speed and strength."
				<cite>&ndash;Susan Jones</cite></p></blockquote> 

				<blockquote>
				<p>"Kuba has been practicing with Futsal Elite since he was 5 ½ (now 7 ½). The coaches are great and are very competent. 
				Kuba has made great progress and love his Futsal sessions with Futsal Elite. Futsal Elite are fantastic for children who are passionate about sports."
				<cite>&ndash;Elle Walczak</cite></p></blockquote>

				<blockquote>
				<p>"Kenny has been working with my son Kieran, 17, since an early age, providing both coaching and football mentoring support.
				 I have often braved the elements to stand and observe Kenny's innovative training routines which have developed Kieran's technique, 
				 football brain and lately his physical attributes... "
				<cite>&ndash;Cassius Powell</cite></p></blockquote>  

				<blockquote>
				<p>"My sons aged 8 and 10 years have had 1:1 sessions for the past 3 months. 
				They have worked on several techniques; also improving their concentration and general physical development... "
				<cite>&ndash;Harina</cite></p></blockquote>  
		        	
		        

		</div><!--end testimonials-->


	</div>

	<div class=" hidden-xs hidden-sm col-md-4" >
	<h1>Twitter</h1>
	

		<a class="twitter-timeline" href="https://twitter.com/futsalelite" 
		data-widget-id="626150770593935360" query="futsalelite" style="width:300px; height:40%;" data-tweet-limit="2">Tweets about "#futsalelite"</a>


	<script>
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	$('.inputfield').focus(function() {
    	$this = $(this);
    	$this.select();
    	$this.mouseup(function() {
        	$this.unbind("mouseup");
        	return false;
    	});
    });
    /* <![CDATA[ */
    (function() {
        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
        t.parentNode.insertBefore(s, t);
    })();
	/* ]]> */
	</script>

	<h1>Facebook</h1>


	<div class="fb-like" data-href="https://www.facebook.com/pages/Futsal-Elite/224731790912865" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	<br><br>
	<!-- <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FSoca-Saga-Boys%2F9370970599&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21&amp;appId=850460208301670" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe> -->
	<h1>Instagram</h1>

	<!-- Instagram Plugin Starts here -->
	<script src="http://snapwidget.com/js/snapwidget.js"></script>
	<iframe src="http://snapwidget.com/in/?u=ZnV0c2FsZWxpdGV8aW58MTI1fDJ8Mnx8bm98NXxmYWRlSW58b25TdGFydHx5ZXN8eWVz&ve=2208" 
	title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
		

	<h1>Subscribe</h1>

	<form action="" method="post" class="contactus_yellow">
    <h1>Subsribe to our Newsletter
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>Your Name</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name" />
    </label>
    
    <label>
        <span>Your Email</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
    </label>    
     <label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Subscribe" /> 
    </label>    
	</form>


	</div>

<?php include 'includes/footer.php'; ?>


</div><!--  maincontainer ends here -->

  
