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
            <div class="col s12 mainevent">
                <div class="row">
                    <div class="row">
					<?php foreach($response_primary->result() as $data){ ?>
						<a href="<?php echo base_url().'BFA/event_detail/'.$data->id;?>">
                        <div class="col s8 mainpic" style="background-image: url(<?php echo base_url();?>static/img/<?php echo $data->img ?>);">
                                <div class="maintitle">
                                <?php echo $data->name ?>
                                </div>
                                <div class="maindate">
                                <?php echo $data->date ?></div>
                        </div>
                        <div class="col s4 maindesc">
						<?php 
						$out = strlen($data->event_desc) > 400 ? substr($data->event_desc,0,400)." ..." : $data->event_desc;
						echo $out ?>
                        </div>
						<?php } ?>
						</a>
                    </div>
                </div>
            </div>
            <div class="row moreevent" >
                <div class="col s12">More News and Event
                </div>
            </div>
            <div class="row"  style="margin-left: 0px;">
			<?php foreach($response->result() as $row){ ?>
				<a href="<?php echo base_url().'BFA/event_detail/'.$row->id;?>">
                <div class="col s5 sidepic1"  style="margin: 10px 20px 0px 0px; background-image: url(<?php echo base_url();?>static/img/<?php echo $row->img ?>);">
                    <div class="sidetitle">
                    <?php echo $row->name ?>
                    </div>
                    <div class="sidedate">
                    <?php echo $row->date ?>
                    </div>
                </div>
				</a>
			<?php } ?>
            </div>
    	</div>
    </body>
</html>