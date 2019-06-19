<!DOCTYPE html>
<html>
<?php
if(!isset($this->session->userdata['logged_in'])){header('location:login');}
else {
	$username = ($this->session->userdata['logged_in']['username']);
	}
?>
    <head>
		<title>Admin Panel</title>
		<link rel="icon" href="<?php echo base_url(); ?>static/img/logo.png" type="image/gif">
        <link href="<?php echo base_url(); ?>static/css/style-admin.css" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/materialize.min.css" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/slideshow.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Grid from Materialize-->
    </head>
   
    <body>
        <div id="header">
	       <div class="inHeader">
		      <div class="mosAdmin">
                  Hallo, <?php echo $username ?><br>
		      <a href="<?php echo base_url(); ?>BFA/logout">Keluar</a>
		      </div>
	       <div class="clear"></div>
	       </div>
        </div>
					<div id="wrapper">
                        <div id="leftBar">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>BFA/adm_add_field">Tambah Lapangan</a></li>
                                <li><a href="<?php echo base_url(); ?>BFA/adm_field">Lihat Lapangan</a></li>
                                <li><a href="<?php echo base_url(); ?>BFA/adm_add_category">Tambah Category</a></li>
                                <li><a href="<?php echo base_url(); ?>BFA/adm_category">Lihat Category</a></li>
								<li><a href="<?php echo base_url(); ?>BFA/adm_add_event">Tambah Event</a></li>
                                <li><a href="<?php echo base_url(); ?>BFA/adm_event">Lihat Event</a></li>
                            </ul>
                        </div>
                        <div id='rightContent'>
                            <form method='post' action='<?php echo base_url(); ?>BFA/adm_submit_event' enctype="multipart/form-data">
                                <table>
									<tr>
                                        <td><b>Event ID</b></td>
                                        <td><input type='text' maxlength='10' name='id' class='sedang' required></td>
                                    </tr>
                                    <tr>
                                        <td><b>Name</b></td>
                                        <td><input type='text' maxlength='30' name='name' class='sedang' required></td>
                                    </tr>
                                    <tr>
                                        <td><b>Date</b></td>
                                        <td><input type='date' name='date' class='sedang' required></td>
                                    </tr>
									<tr>
                                        <td><b>Price</b></td>
                                        <td><input type='number' min='10000' maxlength='11' name='price' required></td>
                                    </tr>
									<tr>
                                        <td><b>Event Description</b></td>
                                        <td><textarea name='desc' maxlength='1500' required></textarea></td>
                                    </tr>
									<tr>
                                        <td><b>Contact</b></td>
                                        <td><input type='text' maxlength='13' name='contact' class='sedang' required></td>
                                    </tr>
									<tr><td><b>Image</b></td>
										<td><img class="img_preview" id="blah"></td>
                                    </tr>
									<tr>
										<td></td>
										<td><input type='file' maxlength='13' name='img' id='imgInp' required onchange="readURL(this);" accept="image/*"></td>
									</tr>
									<tr>
                                        <td><b>Highlight</b></td>
                                        <td><select name='status' class='browser-default'>
											<option value="1">YES</option>
											<option value="0">NO</option>
										</select>
										</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type='submit' class='button' value='Submit'>
                                            <input type='reset' class='button' value='Reset'>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
	<script type="text/javascript">
        function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#blah').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#imgInp").change(function() {
		  readURL(this);
		});
    </script>
    </body>
</html>