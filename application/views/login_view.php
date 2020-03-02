<?php
	include('Inc/header.php');
?>
<?php
	$this->load->helper('form');
	
	$form_user = array(
		'name' 			=> 'fusername',
		'id' 			=> 'uname',
		'placeholder' 	=> 'username'
	);
	$form_pass = array(
		'name' 			=> 'fpass',
		'id' 			=> 'fp',
		'placeholder' 	=> 'passphrase'
	);
	/*
	echo '<html>';
	echo '<head>';
	echo '</head>';
	echo '<body>';
	*/
	echo '<div class="container">';
		echo form_open('login/verify');
		echo form_input($form_user);
		echo form_password($form_pass);
		echo form_submit('flogin', 'Login');
		echo form_close();
	echo '</div>';
	/*
	echo '</body>';
	echo '</html>';
	*/
?>
<?php
	include('Inc/footer.php');
?>