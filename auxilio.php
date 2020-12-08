<?php
	include("cabecalho_conexao.inc");
	
    $parametro = $_POST['parametro'];
    
    $select =   "<div class=\"form-group\">
                    <label>Cidade:</label>
                        <select class=\"form-control\" name=\"cidade\" id=\"cidade\">
                            <option selected>Escolha sua cidade</option>";
	
	if($parametro != "") {
		
		$SQL = "SELECT id, nome FROM cidades WHERE id_estado = '$parametro%'";

        $resultado = mysqli_query($con, $SQL);			
	
		while(($registro = mysqli_fetch_assoc($resultado)) != NULL) {
            $select .= '<option value="'.$registro['id'].'">'.$registro['nome'].'</option>';
		}
	}
    
    $select .= "    </select>
                </div>";
    echo $select;
	mysqli_close($con);
    
?>