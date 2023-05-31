<?php 

	//



	$nome_usu = $_POST['nome-usu'];
	$senha_usu = $_POST['senha-usu'];

	if ($nome_usu == 'cyntialino@etec.sp.br' && $senha_usu == 'lupita') {
		echo "Bem vindo ao sistema.";
	}else {

		echo "Erro ao acessar o sistema";
	}
	




 ?>