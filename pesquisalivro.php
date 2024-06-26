<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cadastro livro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    $pesquisali = $_POST['buscali'] ?? '';
    include "conexao.php";

    $sql = "SELECT * FROM livros where titulo LIKE '%$pesquisali%'";
    $dadosli = mysqli_query($conexao, $sql);
    ?>
    <div class="container">
        <div class="row">
            <div class="rol">
                <h1>pesquisa de livros</h1>

                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisalivro.php" method="post">
                            <input class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="Search" name="buscali">
                            <button class="btn btn-outline-success" type="submit">pesquisar o livro desejado</button>
                        </form>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>

                                <th scope="col">titulo</th>
                                <th scope="col">ano de publicação</th>
                                <th scope="col">categoria</th>
                                <th scope="col">editora</th>
                                <th scope="col">isbn</th>
                                <th scope="col">autor</th>
                                <th scope="col">Ações</th>

                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            while ($linhali = mysqli_fetch_assoc($dadosli)) {
                                $titulo = $linhali['titulo'];
                                $anopul = $linhali['anopubli'];
                                $cate = $linhali['categoria'];
                                $editora = $linhali['editora'];
                                $isbn = $linhali['isbn'];
                                $autor = $linhali['autor'];

                                echo "<tr>

        <td>$titulo</td>
        <td>$anopul</td>
        <td>$cate</td>
        <td>$editora</td>
        <td>$isbn</td>
        <td>$autor</td>
        <td width=150px>

        <a href='#' class='btn btn-success btn-sm'>Baixar</a>
        
        
        </td>

        </tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                    <a href="homelivro.php" class="btn btn-info">Voltar</a>
                </nav>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>