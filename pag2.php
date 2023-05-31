<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styleform.css">
	<title>Formulário testando 123</title>
</head>
<body>

	<div class="container">
		
		<div class="form">
			<form action="#">
				<div class="form-header">
					<div class="title">
						<h1>Formulário sobre filmes</h1>
					</div>
				</div>
	

				<div class="input-group">
					<div class="input-box">
				
						<label for="nome">Nome: </label>
						<input id="name" type="text" name="nome" placeholder="Digite seu nome" maxlength="2" required> <br><br>
					</div>
					<div class="input-box">
						<label for="genero">Sexo: </label>
						<br>
						<input id="gender" type="checkbox" name="genero" required><label>Feminino</label>
						<br>
						<input id="gender" type="checkbox" name="genero" required><label>Masculino</label>
						<br>
						<input id="gender" type="checkbox" name="genero" required><label>Não-Binário</label>
						<br>
						<input id="gender" type="checkbox" name="genero" required><label>Prefiro não dizer</label>


					</div>
					<div class="input-box">
						<br>
						<label>Idade:</label>
						<input type="text" name="idade" placeholder="Digite sua idade" maxlength="2" required >
					</div>
					<div class="input-option">
						<br>
						Escolha seu gênero de filme favorito: <select name="gênero">
					<option value="comed">Comédia</option>
					<option value="roman">Romance</option>
					<option value="terr">Terror</option>
					<option value="fic">Ficção</option>
					<option value="fic">Musical</option>
					<option value="fic">Aventura</option>
					<option value="fic">Ação</option>
					<option value="dra">Drama</option>
					<option value="fan">Fantasia</option>
					<option value="susp">Suspense</option>

						</select> 

					<div class="container-button">
					<button><a href="#">ENVIAR</a></button>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>