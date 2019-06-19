<!DOCTYPE html>

<html>
    <head>
		<title>CHAWWW!</title>
		<link rel="icon" href="<?php echo base_url(); ?>static/img/logo.png" type="image/gif">
        <link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Grid from Materialize-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/materialize.min.css" media="screen,projection"/>
    </head>
    
    <body>
        <div class="navbar">
            <a href="<?php echo base_url(); ?>BFA/home"><img src="<?php echo base_url(); ?>static/img/logo.png" class="logo"></a>
            <ul>
				<li><a href="<?php echo base_url(); ?>BFA/contact"><h4>Contact Us</h4></a></li>
                <li><a class="active" href="#"><h4>About</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/category"><h4>Order</h4></a></li>
				<li><a href="<?php echo base_url(); ?>BFA/home"><h4>Home</h4></a></li>
				<?php if(!isset($this->session->userdata['logged_in'])){ ?>
					<li><a href='<?php echo base_url(); ?>BFA/login'><h4>Login</h4></a></li>
				<?php } else { ?>
					<li><a href='<?php echo base_url(); ?>BFA/logout'><h4>Logout</h4></a></li>
				<?php } ?>
            </ul>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="about">
                        <h3>About Us</h3>
                    </div>
                </div>
              </div> 
            <div class="row">
                <div class="col s12">  
                    <div class="textabout">
                        <p>CHAWWW! merupakan website yang diciptakan untuk mempermudah anda para wisatawan untuk bertamasya di Kota Bandung.</p> 
						<p>Office : Komplek Puri Indah Blok A4/4.</p>
                    </div>
                </div>
            </div>
        </div>         
    </body>
</html>