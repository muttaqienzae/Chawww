<!DOCTYPE html>
<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
header("location: BFA/login");
}
?>
    <head>
		<title>Login</title>
		<link rel="icon" href="<?php echo base_url(); ?>static/img/logo.png" type="image/gif">
        <link href="<?php echo base_url(); ?>static/css/login.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
	<?php
	if (isset($logout_message)) {
		echo "<div class='message'>";
		echo $logout_message;
		echo "</div>";
	}
	?>
	<?php
	if (isset($message_display)) {
		echo "<div class='message'>";
		echo $message_display;
		echo "</div>";
	}
	?>
		<div id="main">
			<div id="login">
				<h2>Admin Login</h2><br>
				<?php echo form_open('BFA/login'); ?>
				<?php
					echo "<div class='error_msg'>";
						if (isset($error_message)) {
							echo $error_message;
						}
					echo validation_errors();
					echo "</div>";
				?>
				<label>Username :</label>
				<input type="text" name="username" id="name" placeholder="username"/><br /><br />
				<label>Password :</label>
				<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
				<input type="submit" value=" Submit " name="submit"/><br />
				<?php echo form_close(); ?>
			</div>
		</div>
	</body>
</html>