
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
               if (empty($_POST['message']) === true) {
                $errors[] = 'Please enter a reason for contacting us.';
                
            }
            if (empty($errors) === false) {
                echo output_errors($errors);
            } else {
            contactform($_POST['name'], $_POST['email'], $_POST['message'], $headers);
            header ("Location: contactus.php?emailsent");
            exit();
                  }
             }   

        
?>
   


<div class="maincontainer col-lg-10 col-md-10 col-sm-10 col-xs-10"><!--  maincontainer starts here -->
<?php if (isset($_GET['emailsent']) ) {
                echo 
                '<div style="background:#44B23D;color:black; padding: 10px; text-align:center;"> 
                <p><strong>Your email has been sent to us successfully.  Please allow 2-3 working days for a response to your query.</strong> 
                </p> 
                </div>';
            } ?>


<div class="col-xs-12 col-sm-12 col-md-8" style="margin-top: 20px;">
	<form action="" method="post" class="contactus_yellow">
    <h1>Email Us 
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
        <span>Your Contact Number</span>
        <input id="email" type="text" name="number" placeholder="Preferred Contact Number" />
    </label>
    <label>
        <span>Reason for Enquiry</span>
        <textarea id="message" name="message" placeholder="Your message to us..."></textarea>
    </label>     
     <label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Send" /> 
    </label>    
</form>

</div> 

<div class=" hidden-xs hidden-sm col-md-4" >

    <h1>Call Us</h1>
    <p><strong>Phone:</strong> <a href="callto:07891636411">07891 636 411</a> </p>


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


<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=192927687570041";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <h1>Facebook</h1>


    <div class="fb-like" data-href="https://www.facebook.com/pages/Futsal-Elite/224731790912865" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
    <br><br>
    
    <h1>Instagram</h1>

    <!-- Instagram Plugin Starts here -->
    <script src="http://snapwidget.com/js/snapwidget.js"></script>
    <iframe src="http://snapwidget.com/in/?u=ZnV0c2FsZWxpdGV8aW58MTI1fDJ8Mnx8bm98NXxmYWRlSW58b25TdGFydHx5ZXN8eWVz&ve=2208" 
    title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
        

    </div>

<?php include 'includes/footer.php'; ?>

	
</div><!--  maincontainer ends here -->
