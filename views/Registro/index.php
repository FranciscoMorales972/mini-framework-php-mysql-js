<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= IMG ?>favicon.ico" type="image/ico" />

  <title>Gentelella Alela! | <?= $data["page_name"]?></title>

  <!-- Bootstrap -->

  <link href="<?= CSS ?>bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div id="login">
    <div class="container my-5">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <form id="formRegistrar" class="form" action="" method="POST">
              <h3 class="text-center text-info">Registrar Usuarios</h3>
              <div class="form-group">
                <label for="username" class="text-info">Nombre del Usuario:</label><br>
                <input type="text" name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="userEmail" class="text-info">Correo del Usuario:</label><br>
                <input type="email" name="userEmail" id="userEmail" class="form-control">
              </div>
              <div class="form-group">
                <label for="userPass" class="text-info">Contraseña:</label><br>
                <input type="password" name="userPass" id="userPass" class="form-control">
              </div>
              <div class="form-group">
                <label for="userPassConfirm" class="text-info">Confirmar Contraseña:</label><br>
                <input type="password" name="userPassConfirm" min="8" id="userPassConfirm" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" id="btnRegistrar" value="Registrar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <p class="text-center my-4"> &copy;2021-<?= date("Y") ?> </p>


  <script>const BASE_URL="<?=BASE_URL;?>" </script>
  <script src="<?= JS ?>jquery.min.js"></script>
  <script src="<?= JS ?>bootstrap.min.js"></script>
  <script src="<?= JS ?>sweetalert2.all.min.js"></script>
  <script src="<?=JS."app/".$data["page_script"]; ?>"></script>
</body>

</html>