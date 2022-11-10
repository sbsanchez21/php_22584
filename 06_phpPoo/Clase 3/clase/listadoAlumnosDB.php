<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <br>

    <div class="container">
      <h4 class="text-center mb-4">Listado de alumnos</h4>

      <div class="table-responsive">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            <?php
            /**
             * Nos conectamos a la db y generamos una fila x
             * cada alumno, y una col x cada dato
             */

            //conexión a la db
            $conn = new mysqli("localhost", "root", "", "alumn22584");

            //verifica que no haya errores de conexión
            if ($conn->connect_errno) {
              /* Use your preferred error logging method here */
              echo "No se pudo conectar a la base de datos";
              echo $conn->connect_error;
            }

            $query = $conn->query("SELECT * FROM alumnos");

            //transforma el resultado $query en una matriz  o array de array asociativo
            while ($alumno = $query->fetch_assoc()) {
              //$listalumnos es un array asociativo
              $listAlumnos[] = $alumno;
            }

            $cantFilas = count($listAlumnos);


            for ($i = 0; $i < $cantFilas; $i++) {
              echo "<tr>";

              echo "<td>";
              echo $listAlumnos[$i]["id"];
              echo "</td>";

              echo "<td>";
              echo $listAlumnos[$i]["nombre"];
              echo "</td>";

              echo "<td>";
              echo $listAlumnos[$i]["apellido"];
              echo "</td>";

              echo "<td>";
              echo $listAlumnos[$i]["dni"];
              echo "</td>";


              echo "</tr>";
            }




            ?>
          </tbody>
        </table>
      </div>
    </div>



  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script src="js/script.js"></script>
</body>

</html>