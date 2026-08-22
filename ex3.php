<html>
<head>
	<meta charset="utf-8">
	<title>Funções</title>
	<?php
	  $vlr = $_POST['lista_convert'];
	  $texto = $_POST['txt'];
	  //chamar a função
	  converter($vlr, $texto);

	  function converter($valor, $txt){
	  	if ($valor == 'mai'){
	  		echo $txt = strtoupper($txt);
	  	} //fim do chaves
	  	if ($valor == 'min'){
	  		echo $txt = strtolower($txt);
	  	} //fim do chaves
	}//fim da funcao
	?>
</head>
<body>
	<form name="form" method="post">
		<label>Texto</label>
		<input type="text" name="txt" value="" />
		<select name="lista_convert">
			<option value="mai">Maiúscula</option>
			<option value="min">Minúscula</option>
		</select>
		<p></p>
		<input type="submit" value="Converter">
	</form>
</body>
</html>