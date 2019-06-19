<!DOCTYPE html>

<html>
    <head>
        <title>Bandung Futsal Arena</title>
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
                <li><a href="<?php echo base_url(); ?>BFA/about"><h4>About</h4></a></li>
                <li><a class="active" href="#"><h4>Event</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/category"><h4>Category</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/home"><h4>Home</h4></a></li>
				<?php if(!isset($this->session->userdata['logged_in'])){ ?>
					<li><a href='<?php echo base_url(); ?>BFA/login'><h4>Login</h4></a></li>
				<?php } else { ?>
					<li><a href='<?php echo base_url(); ?>BFA/logout'><h4>Logout</h4></a></li>
				<?php } ?>
            </ul>
        </div>
     	<div class="container">
			<?php foreach($response->result() as $data){ ?>
            <div class="row">
                <div class="col s12">
                    <div class="detailevent" style="background-image: url(<?php echo base_url();?>static/img/<?php echo $data->img ?>);">
                        <div class="juduldetail">
                            <?php echo $data->name ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s10">
                    <div class="isidetailevent">
                        <p>
                            <?php echo $data->event_desc ?>
                        </p><br>
						<img class="posterevent" id="myImg" alt="<?php echo $data->img ?>" src="<?php echo base_url(); ?>static/img/<?php echo $data->img ?>">
                    </div>
                </div>
            </div>
			<?php } ?>
        </div>
		<!-- The Modal -->
		<div id="myModal" class="myModal">
			<span class="close">&times;</span>
			<img class="modal-content" id="img01">
			<div id="caption"></div>
		</div>
		<script>
			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById('myImg');
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
				modal.style.display = "block";
				modalImg.src = this.src;
				captionText.innerHTML = this.alt;
			}
			

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
				modal.style.display = "none";
			}
		</script>
    </body>
</html>