<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cadastro do livro</h1>
        <form action="cadli.php" method="post">
          <div class="mb-3">
            <label for="nome" class="form-label">titulo do  livro</label>
            <input type="text" class="form-control" name="titulo">


            <label for="anopul" class="form-label">ano publicação</label>
            <input type="date" class="form-control" name="anopubli">


            <label for="categoria" class="form-label">categoria</label>
            <input type="text" class="form-control" name="categoria">


            <label for="editora" class="form-label">editora</label>
            <input type="text" class="form-control" name="editora">

            <label for="isbn" class="form-label">isbn</label>
            <input type="text" class="form-control" name="isbn">

            <label for="autor" class="form-label">autor</label>
            <input type="text" class="form-control" name="autor"> <br>

            <input type="submit" class="btn btn-success">


          </div>

        </form>
        <a href="homelivro.php" class=" btn btn-info">Voltar</a>




      </div>

    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>