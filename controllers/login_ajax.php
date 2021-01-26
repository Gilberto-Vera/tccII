<?php
	$message_ok=false;
	$message_error='O Sistema não está disponível';
	if(isset($_POST['username'],$_POST['password'])):
		if($_POST['username']!=""):
			if($_POST['password']!=""):
				$username=$_POST['username'];
				$password=md5($_POST['password']);
				$res=pg_query($conn,("Select * from user_tbl where username='$username' and password='$password'"));
				if(pg_num_rows($res)>0):
					$message_ok=true;
					$user_list=pg_fetch_array($res);
					$_SESSION['id']=$user_list[0];
					$_SESSION['username']=$user_list[1];
					$message_error='Logado';
				else:
					$message_error='Falha no acesso, por favor, tente novamente.';
				endif;
			else:
				$message_error='Senha errada.';
			endif;
		else:
			$message_error='Usuário não existe.';
		endif;
	else:
		$message_error='Todos os campos são obrigatórios.';
	endif;
	$json=array('data' => $message_ok, 'message' =>$message_error);
	echo json_encode($json);
?>
