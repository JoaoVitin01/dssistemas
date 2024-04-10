<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>cadastrado</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
     <div class="rol">
        <?php 

        include "conexao.php";
        $titulo = $_POST['titulo']; 
        $anopul = $_POST['anopubli'];
        $cate = $_POST['categoria'];
        $editora = $_POST['editora'];
        $isbn = $_POST['isbn'];
        $autor = $_POST['autor'];
        
        $sql = "INSERT INTO livros(titulo,anopubli,categoria,editora,isbn,autor)
        VALUES('$titulo','$anopul','$cate','$editora','$isbn','$autor')";
        if($sql = mysqli_query($conexao,$sql)){

            mensagem("$titulo cadastrado com sucesso!",'success');
        }
        else{
            mensagem("erro ao cadastrar usuario",'danger');
        }
        
        ?>
        <hr>
         <a href="homelivro.php" class="btn btn-primary">voltar</a>

      </div>

    </div>
    </div>
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>