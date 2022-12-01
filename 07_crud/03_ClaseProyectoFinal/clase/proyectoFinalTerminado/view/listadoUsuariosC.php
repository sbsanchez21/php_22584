<!doctype html>
<html lang="en">

<head>
  <title>Listado de Usuarios</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="text-center bg-light">

  <div class="container">
    <div class="py-4 text-center">
      <img class="d-block mx-auto mb-4" src="./images/logo.jpg" alt="Logo caba" width="72" height="72">
      <h2>Usuarios</h2>
      <p class="lead">Listado de Usuarios</p>
    </div>

    <table class="table table-hover ">
      <thead class="table-dark">
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Usuario</th>
          <th scope="col">Contraseña</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once("../dao/UsuarioDAOC.php");
        
        $dao = new UsuarioDAOC();
        $listaUsu = $dao->listarUsuarios();
        // var_dump($listaUsu);

        foreach ($listaUsu as $usuario) {
        ?>
          <tr>
            <td><?php echo $usuario->getIdUsuario(); ?></td>
            <td><?php echo $usuario->getUsuario(); ?></td>
            <td><?php echo $usuario->getClave(); ?></td>
          </tr>

        <?php
          
        }

        // for ($i = 0; $i < count($listaUsu); $i++) {
        // ?>
        <!-- //   <tr>
        //     <td><?php echo $listaUsu[$i]->getIdUsuario(); ?></td>
        //     <td><?php echo $listaUsu[$i]->getUsuario(); ?></td>
        //     <td><?php echo $listaUsu[$i]->getClave(); ?></td>
        //   </tr> -->

        <!-- <?php 
        // }
        // ?>
        -->

      </tbody>

    </table>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>