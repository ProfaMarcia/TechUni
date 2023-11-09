<?php

$nome = $_POST["nome"];
$fone = $_POST["fone"];
$email = $_POST["email"];
$senha = $_POST ["senha"];
$enviar = $_POST["enviar"];

include("conexao.php");
 
if (isset($enviar)) {
$cad_adm = "INSERT INTO adm (id, nome, fone, email, senha, estado) 
VALUES ('NULL','$nome' ,'$fone', '$email', '$senha', 'Aguardando')";
$cad_adm = mysqli_query($conect, $cad_adm);

echo '<script>
alert("cadastrado realizado com sucesso!");
window.location="login.html";
</script>';
}

?>