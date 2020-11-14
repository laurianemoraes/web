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

    <form action="cadastro_salvar.php" method="post">
      <div class="row">
        <div class="col">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="f_nome" required>
        </div>
        <div class="col">
            <label for="">E-mail</label>
            <input type="email" class="form-control" name="f_email" required>
        </div>
        <div class="col">
            <label for="">Fone</label>
            <input type="text" class="form-control" name="f_fone" data-mask="(00) 00000-0000" required>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
        <button class="btn btn-primary btn-block" type="submit">Salvar</button>
        </div>
      </div>
    </form>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

</body>
</html>