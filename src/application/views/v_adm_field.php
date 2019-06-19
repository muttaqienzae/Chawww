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
                            <table width='95%' class='data'>   
                                <tr style='text-align:center;'>
                                    <td class='data'>ID</td>
									<td class='data'>Category ID</td>
									<td class='data'>Name</td>
                                    <td class='data'>Address</td>
									<td class='data'>Operational Hour</td>
                                    <td class='data'>Price</td>
                                    <td class='data'>Contact</td>
                                    <td class='data'>Action</td>
                                </tr>
								<?php foreach($response as $data){ ?>
                                <tr class='data'>
									<td><?php echo $data['id'] ?></td>
                                    <td><?php echo $data['category_id'] ?></td>
									<td><?php echo $data['name'] ?></td>
                                    <td><?php echo $data['address'] ?></td>
                                    <td><?php echo $data['open_hour'] . ' - ' . $data['close_hour'] ?></td>
                                    <td><?php echo $data['price_min'] . ' - ' . $data['price_max']  ?></td>
                                    <td><?php echo $data['contact'] ?></td>
                                    <td><a href='<?php echo base_url().'BFA/edit_field/'.$data['id'];?>'>Edit</a> <a href='<?php echo base_url().'BFA/delete_field/'.$data['id'];?>'>Delete</a></td>
                                </tr>
								<?php } ?>
                            </table>
                        </div>
                    </div>
    </body>
</html>