<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Login</title>
</head>
<body>


	<div class="container">
		<div class="form-image">
			<img src="img.svg">
		</div>
		<div class="form">
			<form action="login.php">
				<div class="form-header">
					<div class="title">
						<h1>Login</h1>
					</div>
				</div>
	

				<div class="input-group">
					<div class="input-box">
						<label for="email">E-mail:</label>
						<input id="mail" type="email" name="email-usu" placeholder="Digite seu e-mail" maxlength="50" required>
					</div>
					<div class="input-box">
						<label for="senha">Senha: </label>
						<input id="senha" type="password" name="senha-usu" placeholder="Digite sua senha"  maxlength="15" required>
					</div>
				</div>
				<div class="container-button">
					<button><a href="#">ENTRAR</a></button>
				</div>
			</form>
		</div>
	</div>


</body>

</html>

