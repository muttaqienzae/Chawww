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
                            <form method='post' action=''>
                                <table>
                                    <tr>
                                        <td><b>Nama Tempat</b></td>
                                        <td><input type='text' maxlength='15' name='namalapang'></td>
                                    </tr>
                                    <tr>
                                        <td><b>Nomor Telepon</b></td>
                                        <td><input type='text' maxlength='12' name='tlp'></td>
                                    </tr>
                                    <tr>
                                        <td><b>Alamat</b></td>
                                        <td><textarea name='alamat'></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><b>Harga</b></td>
                                        <td><input type='text' maxlength='15' name='username'></td>
                                    </tr>
                                    <tr><td><b>Jam Operasi</b></td>
                                        <td><input type='password' maxlength='15' name='password'></td>
                                    </tr>
                                    <tr>
                                        <td><b>Kategori</b></td>
                                        <td>
                                            <select name='kategori'>
                                                <option>1</option>				<option>2</option>
                                                <option>3</option>				<option>4</option>
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
    </body>
</html>