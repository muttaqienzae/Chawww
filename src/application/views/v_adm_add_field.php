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
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/materialize.min.css" media="screen,projection"/>
		<link href="<?php echo base_url(); ?>static/css/style-admin.css" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/slideshow.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
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
                                <li><a href="<?php echo base_url(); ?>BFA/adm_add_field">Tambah Tempat</a></li>
                                <li><a href="<?php echo base_url(); ?>BFA/adm_field">Lihat Tempat</a></li>
                                <li><a href="<?php echo base_url(); ?>BFA/adm_add_category">Tambah Category</a></li>
                                <li><a href="<?php echo base_url(); ?>BFA/adm_category">Lihat Category</a></li>
							</ul>
                        </div>
                        <div id='rightContent'>
                            <form method='post' action='<?php echo base_url(); ?>BFA/adm_submit_field'>
                                <table>
									<tr>
                                        <td><b>Field ID</b></td>
                                        <td><input type='text' maxlength='10' name='id' class='sedang' required></td>
                                    </tr>
									<tr>
                                        <td><b>Category</b></td>
                                        <td><select name='category' class='browser-default'>
										<?php foreach($response as $data){ ?>
											<option value="<?php echo $data['category_id'] ?>"><?php echo $data['name'] ?></option>
										<?php } ?>
										</select>
										</td>
                                    </tr>
                                    <tr>
                                        <td><b>Field Name</b></td>
                                        <td><input type='text' maxlength='30' name='name' class='sedang' required></td>
                                    </tr>
                                    <tr>
                                        <td><b>Open Hour</b></td>
                                        <td><input type='number' min='1' max='24' name='open_hour' class='sedang' required></td>
                                    </tr>
									<tr>
                                        <td><b>Close Hour</b></td>
                                        <td><input type='number' min='1' max='24' name='close_hour' class='sedang' required></td>
                                    </tr>
                                    <tr>
                                        <td><b>Address</b></td>
                                        <td><textarea name='address' maxlength='50' required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><b>Price Min</b></td>
                                        <td><input type='number' min='10000' maxlength='11' name='price_min' required></td>
                                    </tr>
									<tr>
                                        <td><b>Price Max</b></td>
                                        <td><input type='number' min='10000' maxlength='11' name='price_max' required></td>
                                    </tr>
                                    <tr><td><b>Contact</b></td>
                                        <td><input type='text' maxlength='13' name='contact' required></td>
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
    </body>
</html>