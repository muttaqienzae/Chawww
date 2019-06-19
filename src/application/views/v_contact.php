<!DOCTYPE html>

<html>
    <head>
		<title>CHAWWW!</title>
		<link rel="icon" href="<?php echo base_url(); ?>static/img/logo.png" type="image/gif">
		<!--Grid from Materialize-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/materialize.min.css" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <div class="navbar">
			<a href="<?php echo base_url(); ?>BFA/home"><img src="<?php echo base_url(); ?>static/img/logo.png" class="logo"></a>      
            <ul>
				<li><a class="active" href="#"><h4>Contact Us</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/about"><h4>About</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/category"><h4>Order</h4></a></li>
				<li><a href="<?php echo base_url(); ?>BFA/home"><h4>Home</h4></a></li>
				<?php if(!isset($this->session->userdata['logged_in'])){ ?>
					<li><a href='<?php echo base_url(); ?>BFA/login'><h4>Login</h4></a></li>
				<?php } else { ?>
					<li><a href='<?php echo base_url(); ?>BFA/logout'><h4>Logout</h4></a></li>
				<?php } ?>
            </ul>
        </div>
		<div class="remodal-bg">
        <div class="container">
        <div class="contact">
			<h3>Contact Us</h3>
            <p>Thank you for visiting our website. <br>If you have any questions or concerns, please kindly contact us via any of our contact below:</p>
			
			<div class="socmed">
				<a href="http://www.facebook.com" class="fb"><img src="<?php echo base_url(); ?>static/img/facebook.png"></a>
				<a href="http://www.google.com" class="gp"><img src="<?php echo base_url(); ?>static/img/gplus.png"></a>
				<a href="http://www.twitter.com" class="tw"><img src="<?php echo base_url(); ?>static/img/twitter.png"></a>
				<a href="http://www.instagram.com" class="ig"><img src="<?php echo base_url(); ?>static/img/instagram.png"></a>
			</div>
			
			<p>or you can reach us through form below</p>
			<form action="<?php echo base_url(); ?>BFA/submit_contact" method="post" class="form_contact" id="form_contact">
				<fieldset>
				<legend>Feedback Form:</legend>
				<label for="name" class="contact_label">*Name :</label><input type="text" name="name" class="contact_input" required><br>
				<label for="email" class="contact_label">*Email :</label><input type="email" name="email" class="contact_input" required><br>
				<label for="subject" class="contact_label">*Subject :</label><input type="text" name="subject" class="contact_input" required><br>
				<label for="message" class="contact_label">Message :</label><br><br>
				<textarea  placeholder="Remember, be nice!" class="textcontact" name="message" rows="6" style="overflow: hidden; word-wrap: break-word;
				resize: none; height: 320px;" required>
				</textarea><br><br>
				<input type="submit" name="submit" value="Send your message!" class='submit_contact'><br>
				<input type="reset" value="Reset" class='reset_contact'>
				</fieldset>
			</form>
        </div>
        </div>
		</div>
        <script type="text/javascript"> 
		$("#form_contact").submit(function(e){
			e.preventDefault();
			$.ajax({
				type : 'POST',
				url : 'http://localhost/CI_projek/src/index.php/BFA/submit_contact',
				success : function(response){
					if(response == "Success"){
						$('#remodal').modal('show');
					}else{
						alert("Something just went wrong, Please try again later...");
					}
				},
				error: function(){ 
					alert("Something just went wrong, Please try again later...");
				}
			});
		return false;
		});
		</script>
		<script src="<?php echo base_url(); ?>static/js/remodal.min.js"></script>
    </body>
</html>