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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio
                            <span class="sr-only">(current)</span>
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
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron my-4 text-center">
            <img src="../images/home.jpg" height="350">
        </header>

        <!-- Menu buttons -->
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <a href="https://www.yugioh-card.com/uk/news/"><button type="button" class="btn btn-outline-danger">Noticias</button></a>
                    
                    <button type="button" class="btn btn-outline-danger">Eventos</button>
                    
                    <a href="https://img.yugioh-card.com/es/rulebook/SD16_RB_es-low.pdf"><button type="button" class="btn btn-outline-danger">Reglas</button></a>
                    
                     <a href="https://www.yugioh-card.com/uk/gameplay/detail.php?id=1155"><button type="button" class="btn btn-outline-danger">Banlist</button></a>
                    
                </div>
                
                
                
            </div>
        </div>

        <br>
        <hr>
        <!-- Page Features -->
        <div class="row text-center">

            <!--Carta 1-->

            <?php
                require "../Back/conecta.php";
                $sql = "SELECT * FROM Cartas Limit 4";
            $res = mysqli_query($con, $sql);
            $num = mysqli_num_rows($res);
            
            for($i = $num; $objeto = $res->fetch_object() ; $i++)
            {
                ?>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img height="250" src="../images/<?= $objeto->Ilustracion ?>">

                    <div class="card-body">
                        <h4 class="card-title"><?= $objeto->Nombre ?></h4>

                        <p class="card-text"><?= $objeto->Descripcion ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="det_carta.php?ID=<?=$objeto->ID?>" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Yu-Gi-Oh! <br>(遊 戯 王, Yū-gi-ō;? «El rey de los juegos») </h1>
            <p class="lead">Es un manga creado por Kazuki Takahashi, que ha dado lugar a una franquicia, además de múltiples series de anime, juegos de cartas y numerosos videojuegos.</p>
            <a href="#" class="btn btn-primary">Información completa</a>
        </div>
    </div>




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
