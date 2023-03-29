<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Sumula</title>
</head>
<body>
    <div class="geral">
        <div class="cabecario">Súmula Xadrez 2023</div>
        <div class="menu2">
        <ul class="menu">  
            <li><li><a href="sumula.php">Sumula Xadrez</a></li>        
                <li><a href="Cadastro_torneio.php"> Cadastro Torneio</a></li>
                <li><a href="cadastro_jogadores.php"> Cadastro Jogadores</a></li>
                <li><a href="cadastro_jogadas.php"> Cadastro Jogadas</a></li>
            </ul></div>
            <div class="cadastro1"> 
    <form action="principal.php" method="post">    
    <table border="1">
        <thead><h1>Login</h1></thead>
        <tr>
            <th> Digite seu Usuario </th>
            <th class="no"></th>
            <th>Digite sua Senha</th>
        </tr>
        <tr>
            <td><input type="text" name="usuario" placeholder="" class="no"></td>
            <td class="no"></td>
            <td><input type="password" name="senha" placeholder="" class="no"></td>
        
        </tr>
    </table>
<input type="submit" value="enviar" class="enviar">
   </form>
            </div></div>
</body>
</html>
