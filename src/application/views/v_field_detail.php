<!DOCTYPE html>

<html>
    <head>
		<title>CHAWWW!</title>
		<link rel="icon" href="<?php echo base_url(); ?>static/img/logo.png" type="image/gif">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Grid from Materialize-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/materialize.min.css" media="screen,projection"/>
		<link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <div class="navbar">
			<a href="<?php echo base_url(); ?>BFA/home"><img src="<?php echo base_url(); ?>static/img/logo.png" class="logo"></a>		
            <ul>
                <li><a href="<?php echo base_url(); ?>BFA/contact"><h4>Contact Us</h4></a></li>
                <li><a href="<?php echo base_url(); ?>BFA/about"><h4>About</h4></a></li>
                <li><a class="active" href="<?php echo base_url(); ?>BFA/category"><h4>Order</h4></a></li>
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
                    <div id="arena1">
                        <div>
                            <div class="foto" onClick="reply_click()">
                                <img id="myImg" alt="<?php echo $data->img ?>" src="<?php echo base_url(); ?>static/img/<?php echo $data->img ?>">
                            </div>
                            <div class="foto">
                                <img id="myImg1" alt="<?php echo $data->img_1 ?>" src="<?php echo base_url(); ?>static/img/<?php echo $data->img_1 ?>">
                            </div><div class="foto">
                                <img id="myImg2" alt="<?php echo $data->img_2 ?>" src="<?php echo base_url(); ?>static/img/<?php echo $data->img_2 ?>">
                            </div><div class="foto">
                                <img id="myImg3" alt="<?php echo $data->img_3 ?>" src="<?php echo base_url(); ?>static/img/<?php echo $data->img_3 ?>">
                            </div>
                            <h1 class="judularena"><?php echo $data->name ?></h1>
                            <div class="row">
                                <div class="col s5">
                                    <div class="detailarena">
                                    <?php echo $data->address ?></div>
                                </div>
                                <div class="col s7">
                                    <div class="telfarena"><?php echo $data->contact ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div id="arena2">
                        <div class="col s4">
                            <div class=" judulisiarena">Opening Hours</div>
                            <div class="isiisi">0<?php echo $data->open_hour ?>.00 - <?php echo $data->close_hour ?>.00</div>
                        </div>
                        <div class="col s4">
                            <div class=" judulisiarena">Cost</div>
                            <div class="isiisi"><?php echo $data->price_min ?> - <?php echo $data->price_max ?> IDR</div>
                        </div>
                        <div class="col s4">
                            <div class=" judulisiarena">Address</div>
                            <div class="isiisi"><?php echo $data->address ?></div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
				<div id="arena2">
						<div id="map"></div>
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
		function initMap() {
			var loc_lat = <?php echo $data->lat ?>;
			var loc_lng = <?php echo $data->lng ?>;
			var loc = {lat: loc_lat, lng: loc_lng};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 18,
				center: loc
			});
			var marker = new google.maps.Marker({
				position: loc,
				map: map
			});
		}
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhaAVfIgZhuXfEbAlV2IZZz4-tfBz4gMM&callback=initMap"></script>
		<script>
			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById('myImg');
			var img1 = document.getElementById('myImg1');
			var img2 = document.getElementById('myImg2');
			var img3 = document.getElementById('myImg3');
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
				modal.style.display = "block";
				modalImg.src = this.src;
				captionText.innerHTML = this.alt;
			}
			img1.onclick = function(){
				modal.style.display = "block";
				modalImg.src = this.src;
				captionText.innerHTML = this.alt;
			}
			img2.onclick = function(){
				modal.style.display = "block";
				modalImg.src = this.src;
				captionText.innerHTML = this.alt;
			}
			img3.onclick = function(){
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