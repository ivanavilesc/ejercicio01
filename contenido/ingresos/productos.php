<html>
    <head>
         <?php include('../../lib/constantes.php'); ?>
        <title><?= sitename; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?=URLBASE;?>css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <link href="<?=URLBASE;?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?=URLBASE;?>css/font-awesome.min.css" rel="stylesheet" type="text/css"/>    
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
        <link href="<?=URLBASE;?>css/fuenteUbuntu.css" rel="stylesheet" type="text/css"/>
        <script src="<?=URLBASE;?>js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?=URLBASE;?>js/jquery-3.3.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <!-- ############# HEADER ###################### -->
        <div id="img">
            <img src="../../img/Logo_DuocUC.jpg" alt="" height="100px" width="135px"/>
        </div>
        <div id="titulo">            
            <center><h2><?= sitename ?></h2></center>
        </div>
        <!-- ############# MENU ###################### -->
        <div id="menu">
            <?php include('../../menu.php'); ?>
        </div>

        <!-- ############# CONTENIDO ###################### -->
        <div id="titcontenido">
            <center><h3>Titulo de Pagina</h3></center>
        </div>
        <div id="contenido">
            <h3>Ingreso de Productos</h3></p>
        <br>
        <div class="container">            
            <table class="table">
                
                <tbody>
                    <tr>
                        <td>Nro Producto</td>
                        <td><div class="col-xs-4">
                                <input type="text" length="30" class="form-control" id="nroproducto">
                            </div>
                        </td>                        
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><div class="col-xs-6">
                                <input type="text" length="30" class="form-control" id="nombreproducto">
                            </div></td>                        
                    </tr>
                    <tr>
                        <td>Precio</td>
                        <td><div class="col-xs-6">
                                <input type="text" length="30" class="form-control" id="precioproducto">
                            </div></td>                          
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-primary">Guardar datos</button></td>
                        <td>                      
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

    </body>    
    <script>
        $("#opcionprincipal1").on("click", function (event) {
            if (($("#subopcion1b").css("display") !== "none")) {
                $("#subopcion1b").css("display", "none");
            } else {
                $("#subopcion1b").show();
                $("#subopcion1b").css("display", "block");
            }

        });

        $("#opcionprincipal1").on("click", function (event) {
            if (($("#subopcion1a").css("display") !== "none")) {
                $("#subopcion1a").css("display", "none");
            } else {
                $("#subopcion1a").show();
                $("#subopcion1a").css("display", "block");
            }

        });

        $("#opcionprincipal1").on("click", function (event) {
            if (($("#subopcion1c").css("display") !== "none")) {
                $("#subopcion1c").css("display", "none");
            } else {
                $("#subopcion1c").show();
                $("#subopcion1c").css("display", "block");
            }

        });

        $("#opcionprincipal2").on("click", function (event) {
            if (($("#subopcion2").css("display") !== "none")) {
                $("#subopcion2").css("display", "none");
            } else {
                $("#subopcion2").show();
                $("#subopcion2").css("display", "block");
            }

        });

        $("#opcionprincipal3").on("click", function (event) {
            if (($("#subopcion3").css("display") !== "none")) {
                $("#subopcion3").css("display", "none");
            } else {
                $("#subopcion3").show();
                $("#subopcion3").css("display", "block");
            }

        });

        $('[data-toggle="tooltip"]').tooltip();
    </script>

</html>