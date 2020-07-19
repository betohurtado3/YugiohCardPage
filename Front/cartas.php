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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cartas.php">Cartas</a>
                        <span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manga/Anime</a>
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
       <br>
       <br>
        <!-- Page Features -->
        <div class="row text-center">

            <!--Carta 1-->
            
            <?php
                require "../Back/conecta.php";
                $sql = "SELECT * FROM Cartas";
            $res = mysqli_query($con, $sql);
            $num = mysqli_num_rows($res);
            
            for($i = $num; $objeto = $res->fetch_object() ; $i++)
            {
                ?>
                
             <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100" id="<?= $objeto->ID?>">
                    <img  height="250" src="../images/<?= $objeto->Ilustracion ?>"> 
                    
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
