<?php
session_start();
if ($_POST) {
    if ($_POST['Usuario'] == "Jaris" && ($_POST['Contraseña'] == "Stived2")) {
        $_SESSION['Usuario'] = "Jaris";
        header("location:index.php");
    } else {
        echo "<script>alert('Usuario Datos incorrectos');</script>";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <br>
                <div class="card">
                    <div class="card-header">
                        Iniciar Sesion
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">

                            Usuario: <input class="form-control" type="text" name="Usuario" id="">
                            <br>
                            Contraseña: <input class="form-control" type="password" name="Contraseña" id="">
                            <br>
                            <button type="submit" class="btn btn-success">Entrar Al Portafolio</button>

                        </form>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>

            </div>
            <div class="col-md-4">
            </div>
        </div>

    </div>

</body>

</html>