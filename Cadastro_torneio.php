<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Cadastro Torneio</title>
</head>
<body>
    <div class="geral">
        <div class="cabecario">Súmula Xadrez</div>
        <div class="menu2">
        <ul class="menu">  
            <li><li><a href="sumula.php">Sumula Xadrez</a></li>        
                <li><a href="Cadastro_torneio.php"> Cadastro Torneio</a></li>
                <li><a href="cadastro_jogadores.php"> Cadastro Jogadores</a></li>
                <li><a href="cadastro_jogadas.php"> Cadastro Jogadas</a></li>
            </ul></div>
    <div class="cadastro1"><form action="sumula.php" method="post">
    <table border="1">
        <thead><h1>Cadastro Torneio</h1></thead>
        <tr>
            <th>Nome do torneio </th>
            <th>Data</th>
            <th>UF</th>
           
        </tr>
        <tr>
            <td><input type="text" name="nometorneio" placeholder="insira o nome do torneio" class="no"></td>
            <td><input type="date" name="datatorneio" placeholder="digite a data e hora" class="no"></td>
            <td><input type="text" nome="uftorneio" placeholder="insira o UF do torneio" class="no"></td>
        
        </tr>
    </table>
    <table border="1">
        <thead><h1>Cadastro Juiz</h1></thead>
        <tr>
            <th>Nome do torneio </th>
            <th>Data de Nascimento</th>
            <th>UF</th>
           
        </tr>
        <tr>
            <td><input type="text" placeholder="insira o nome do torneio" class="no"></td>
            <td><input type="date" placeholder="digite a data" class="no"></td>
            <td><input type="text" placeholder="insira o nome do torneio" class="no"></td>
        
        </tr>
    </table>
   <br><br>
    <input type="submit" value="enviar" class="enviar"></form>
</div> 

</body>
</html>