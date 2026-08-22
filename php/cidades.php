<?php
$cidade_vis = $_POST['lista_cidades'];
foreach ($cidade_vis as $vl_cidade){
	echo '<p></p>Obrigado por visitar ', $vl_cidade;
}
?>
<form name="form_cidades" method="post" action="PHP/Cidades.php">
				<label>Escolha uma cidade para visitar: </label>
				<select name="lista_cidades[]">
												<option value="Santo André">
								Santo André							</option>

												<option value="São Bernardo do Campo">
								São Bernardo do Campo							</option>

												<option value="São Caetano do Sul">
								São Caetano do Sul							</option>

												<option value="Ribeirão Pires">
								Ribeirão Pires							</option>

												<option value="Mauá">
								Mauá							</option>

												<option value="Diadema">
								Diadema							</option>

					
				</select>
				<p></p>
				<input type="submit" value="VISITAR">
				<input type="reset" value="APAGAR">

			</form>