<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Upload de Arquivos</title>
	</head>
	<body>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<label for="arquivo">Arquivo</label>
			<input type="file" name="arquivo" id="arquivo">
			<button>Enviar</button>
		</form>
	</body>
</html>