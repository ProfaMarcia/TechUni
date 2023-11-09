<?php
include("conexao.php");
error_reporting(0);
$id = $_GET["id"];
if (isset($id)) {
    $sql = "DELETE FROM contatos WHERE id='$id'";
	if(mysqli_query($conect, $sql)){
    echo "<script>

window.location='vercontatos.php';
</script>";
	} 
	else{
    echo "Erro ao deletar os dados $sqlm. ". mysqli_error($conect);
}
}
?>