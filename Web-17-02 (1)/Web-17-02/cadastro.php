<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="jumbotron">
      <h2>Cadastro de pessoa</h2>
    </div>

    <form action="index.php" method="post">
      <div class="row">
        <div class="col">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="col">
            <label for="">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome">
        </div>
        <div class="col">
            <label for="">Data nascimento</label>
            <input type="date" class="form-control" name="data_nasc">
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
        <button class="btn btn-primary btn-block" type="submit">Salvar</button>
        </div>
      </div>
    </form>
  </div>
  
</body>
</html>