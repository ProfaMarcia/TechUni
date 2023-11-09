<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Dia D Ubiqua</title>
    <link rel="stylesheet" href="styles.css">
    <style>

        th{
            width:200px;
            text-align: left;
            background-color: #3498db;
            
        }

        td{
            width:200px;
            text-align: left;
            border: 1px solid #000;
            
        }

        #msg{
            width:400px;
            text-align: left;
            background-color: #3498db;
            
        }

        #id, #id1{
            width:100px;
            text-align: left;
            background-color: #3498db;
            
        }

    </style>
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

<center> 
<br><br>      


<h2> Lista de Cadastro </h2>
<br> 
<div class ="card">
<table class="table" >
  <thead class="thead-light">
  <tr>
  <th id="id" scope="col">Id</th>
  <th scope="col">Nome</th>
  <th scope="col">E-mail</th>
  <th id="msg" scope="col">Mensagem</th>
  <th scope="col">Excluir</th>
  </tr>
  </thead>
  <tbody>
  
   
<?php

include("conexao.php");
$sql = "SELECT * FROM contatos";
$res = mysqli_query($conect, $sql);      
                        
            while ($r = mysqli_fetch_array($res)) {

                $id = $r['id'];
             
echo '<tbody>
<tr>
<td id="id1">'.$r['id'].'</td>
 <td>'.$r['nome'].'</td>
  <td>'.$r['email'].'</td>
  <td>'.$r['mensagem'].'</td>
  
  
 <td><a href=excluir.php?id='.$id.'>Excluir </a>  
  </td>
 </tr>'
;

}

?>
         
</div>
</table>                                                    
</body>
</html>