<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Yu-Gi-Oh! Card Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/heroic-features.css" rel="stylesheet">
    <link rel="icon" href="../images/icon.png">


    <?php
            require "../Back/conecta.php";
            $ID = $_GET["ID"];


             $sql = "SELECT *
                            FROM Cartas
                            WHERE ID = '$ID'";

                $res = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($res);
        ?>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #C12705;">
        <div class="container">
            <img src="../images/yugi.png" height="50">
            <a class="navbar-brand" href="#">Yu-Gi-Oh! - Fan Data Page</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cartas.php">Cartas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="anime.php">Manga/Anime</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Información</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <center>
        <div class="container">
            <br>
            <div class="col-lg-3 col-md-6 mb-4 ">
                <div class="card h-100">
                    <img height="250" src="../images/<?= $row['Ilustracion'] ?>">

                    <div class="card-body">
                        <h4 class="card-title"><?= $row['Nombre'] ?></h4>

                        <p class="card-text"><?= $row['Tipo'] ?></p>

                        <p class="card-text"><?= $row['Atributo'] ?></p>

                        <p class="card-text">LV: <?= $row['Nivel'] ?></p>

                        <p class="card-text">CARTA DE: <?= $row['Icono'] ?></p>

                        <p class="card-text"><?= $row['Descripcion'] ?></p>

                        <p class="card-text">ATK: <?= $row['Atk'] ?></p>

                        <p class="card-text">DEF: <?= $row['Def'] ?></p>
                    </div>
                </div>
            </div>
            <hr>
            <a href="index.php" class="btn btn-primary">Regresar</a>
            <br>
            <br>
        </div>
    </center>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright Konami &copy; All rights reserved</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
