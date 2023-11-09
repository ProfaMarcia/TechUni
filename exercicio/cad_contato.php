<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST ["mensagem"];
$enviar = $_POST["enviar"];

include("conexao.php");
 
if (isset($enviar)) {
$cad_contato = "INSERT INTO contatos (id, nome, email, mensagem) VALUES ('NULL','$nome' , '$email', '$mensagem')";
$cad_contato = mysqli_query($conect, $cad_contato);

echo '<script>
alert("cadastrado realizado com sucesso!");
window.location="contato.html";
</script>';
}

?>