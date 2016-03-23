<?php

$logins = array (
		'user1' => 'pass1',
		'user2' => 'pass2',
		'user3' => 'pass3'
	);

if (isset($_POST['btn_login'])) {
	
	if (isset($logins[$_POST['login']])) {
		
		if ($logins[$_POST['login']] == $_POST['senha']) {
			
			include('admin.php');
			
		} else {
			
			$msg = 'Usuário ou Senha Inválidos';
				
			include('login_template.php');				
			
		}
	
	} else {
				
		$msg = 'Usuário ou Senha Inválidos';
				
		include('login_template.php');			
				
	}
	
} else {
	
	include('login_template.php');	
	
}
?>