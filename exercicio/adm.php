<?php

session_start();
require('conexao.php');

if( $_SESSION['login'])
   {

    $login=$_SESSION['login'];
  

$sql = "SELECT * FROM adm WHERE email='$login' and estado='Aprovado'";
$res = mysqli_query($conect, $sql);      

 while ($r = mysqli_fetch_array($res)) {

       

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Dia D Ubiqua</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>TechConnect Uninorte</h1>
    </header>
    <nav>
        <ul>
            <li><a href="adm.php">Página Inicial</a></li>
            <li><a href="vercontatos.php">Ver Contatos</a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
    </nav>
    <content>

    <?php echo "<h2>Bem-Vindo(a): ".$r['nome']."</font></h2>"; ?>

    <br>
        <br>
        
        <br>
        <p>Seja muito bem-vindo à equipe de Administração de Sistemas! Estamos empolgados em tê-lo(a) conosco e 
            confiantes de que sua experiência e habilidades contribuirão significativamente para o sucesso e 
            eficiência dos nossos sistemas de informação.</p>
        <br><br><br><br><br><br><br><br><br>
        </content>
        
    <content>
            <img src="img/tech.jpg" alt="tech">
    </content>
    
    <footer>
        &copy; 2023 Alunos
    </footer>
</body>
</html>

<?php

 }


}
   


?>


  


