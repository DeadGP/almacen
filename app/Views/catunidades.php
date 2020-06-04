<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo unidades de medida</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<div style="position:static; padding: 30px">
<form action="recibirUnidades" method = "POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Clave</label>
    <input class="form-control" name = "code" id="clave" style = "width: 10rem";
    placeholder = "Clave" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <input class="form-control" name = "desc" id="descripcion" style = "width: 40rem";
    placeholder = "Descripcion de la unidad de medida">
  </div>

  <button type="submit" class="btn btn-success">Enviar</button>
  <button type="buttom" class="btn btn-danger">Cancelar</button>
  </div>
</form>
</body>
</html>