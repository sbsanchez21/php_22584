<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

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
                 * array 
                 * luego estos datos serán traidos de la base 
                 * de datos
                 */
                $alumnos[0][0]=1;
                $alumnos[0][1]="Juan";
                $alumnos[0][2]="Perez";
                $alumnos[0][3]=23222555;
                $alumnos[1][0]=2;
                $alumnos[1][1]="Pedro";
                $alumnos[1][2]="Suarez";
                $alumnos[1][3]=22556665;
                $alumnos[2][0]=3;
                $alumnos[2][1]="Romina";
                $alumnos[2][2]="Juarez";
                $alumnos[2][3]=44222333;
                $alumnos[3][0]=4;
                $alumnos[3][1]="Romina";
                $alumnos[3][2]="Juarez";
                $alumnos[3][3]=44222333;

                $cantFilas=count($alumnos);
                $cantCol=count($alumnos[0]);

                for ($i=0; $i < $cantFilas ; $i++) { 
                  echo "<tr>";

                  for ($j=0; $j < $cantCol ; $j++) { 
                    echo "<td>";
                    echo $alumnos[$i][$j];
                    echo "</td>";
                  }

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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>