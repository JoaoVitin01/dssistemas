<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cadastrado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php   
    $pesquisa = $_POST['busca'] ?? '';
    include "conexao.php";

    $sql = "SELECT * FROM usuario where nome LIKE '%$pesquisa%'";
    $dados = mysqli_query($conexao,$sql);
    ?>
    <div class="container">
        <div class="row">
            <div class="rol">
                <h1>pesquisa</h1>

                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="post">
                            <input class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="Search" name="busca">
                            <button class="btn btn-outline-success" type="submit">pesquisar</button>
                        </form>
                    </div>
                    <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">telefone</th>
      <th scope="col">Data de nascimento</th>
      <th scope="col">Email</th>
      <th scope="col">Ações</th>
      
    </tr>

  </thead>
  <tbody>
    <?php
    while($linha = mysqli_fetch_assoc(($dados))){
        $nome = $linha['nome'];
        $endereco = $linha['endereco'];
        $telefone = $linha['telefone'];
        $data = $linha['data'];
        $email = $linha['email'];

        echo"<tr>

        <td>$nome</td>
        <td>$endereco</td>
        <td>$telefone</td>
        <td>$data</td>
        <td>$email</td>
        <td>

        </td>

        </tr>";


    }
    ?>
    
  </tbody>
</table>
                </nav>

            </div>
        </div>
    </div>
    <a href="inicio.php" class=" btn btn-info">Voltar ao Inicio</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>