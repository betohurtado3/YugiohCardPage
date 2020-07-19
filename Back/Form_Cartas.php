<!DOCTYPE html>
<center>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="css/CSS.css">
        <style type="text/css"> </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            function recibe() {
                var name = document.forma1.nombre.value;


                if (name == "") {
                    alert("Datos Incompletos")
                    return false;
                } else
                    return true;

            }

            $(document).ready(function () {
                $("#boton").on('click', function () {
                    if (recibe()) {
                        var form = $('#forma1')[0];
                        var data = new FormData(form);

                        $.ajax({
                            url: 'reg_Cartas.php',
                            type: 'POST',
                            dataType: 'text',
                            data: data,
                            enctype: 'multipart/form-data',
                            processData: false,
                            contentType: false,
                            cache: false,
                            success: function (res) {
                                if (res == 0) {
                                    alert('');
                                } else {
                                    location.href = "../Front/index.php";
                                }
                            }
                        });
                    } ///Termina if confirm ()

                });
            });
        </script>
        <style>
            .link {
                background-color: #fafafa;
                margin: 1rem;
                padding: 1rem;
                border: 1px solid #ccc;
                /* IMPORTANTE */
                text-align: center;
            }

            #menu ul {
                margin: 0;
                padding: 0;
            }

            #menu ul li {
                display: inline;
                margin: 0 3px;
            }
        </style>
    </head>

    <body>
        <form id="forma1" name="forma1" action="reg_Cartas.php" enctype="multipart/form-data">
            <label>
                <hr>
                Nombre : <input id="campo1" type="text" name="nombre" >
                <br><br>
                Tipo : <input id="campo2" type="text" name="tipo">
                <br><br>
                Atributo : <input id="campo3" type="text" name="atributo">
                <br><br>
                Nivel : <input id="campo4" type="number" name="nivel">
                <br><br>
                Icono : <input id="campo5" type="text" name="icono">
                <br><br>
                Descripción : <input id="campo6" type="text" name="descripcion">
                <br><br>
                ATK : <input id="campo7" type="number" name="Atk">
                <br><br>
                DEF : <input id="campo8" type="number" name="Def">
                <br><br>
                
                <input type="file" id="archivo" name="archivo" required>
                <br><br>
            </label>
            <br>
            <hr> <input id="boton" class="boton" type="button" value="Registrar">
        </form>
    </body>
    </html>
</center>