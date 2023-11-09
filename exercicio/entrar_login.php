<?php 


/// session_start inicia a sessão 
require('conexao.php');
session_start();
$usuario = $_POST['email'];
$senha = $_POST['senha'];
// If form submitted, insert values into the database.
if (isset($_POST['entrar'])){
        // removes backslashes
	        $query = "SELECT * FROM adm WHERE email='$usuario'
and senha='$senha' and estado='Aprovado'";
	$result = mysqli_query($conect,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	
        if($rows==1){
			  $_SESSION['login'] = $usuario;
                            
                        // Redirect user to index.php
	    header("Location: adm.php");
         }else{
	echo '<script>
    alert("Você não tem privilégios de Administrador! Ou usuário e senha estão errados!");
    window.location="login.html";
    </script>';

	}
	
	
}
?>