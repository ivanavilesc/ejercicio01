<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">  
        <?php include('./lib/constantes.php'); ?>        
        <title><?=sitename;?></title>        
        <?php include('./frame.php');?>
        
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        <!-- ############# HEADER ###################### -->
        <div id="img">
            <img src="img/Logo_DuocUC.jpg" alt="" height="100px" width="135px"/>
        </div>
        <div id="titulo">            
            <center><h2><?=sitename?></h2></center>
        </div>
        <!-- ############# MENU ###################### -->
        <div id="menu">
            <?php include('./menu.php'); ?>
        </div>
        
        <!-- ############# CONTENIDO ###################### -->
        <div id="titcontenido">
            <center><h3>Titulo de Pagina</h3></center>
        </div>
        <div id="contenido">
            <p>Hola, este texto está en fuente Ubuntu !</p>
        </div>
    </body>
    <script>
        $("#opcionprincipal1").on( "click", function( event ) {
            if(($("#subopcion1b").css("display")!=="none")){
                 $("#subopcion1b").css("display","none");
            }
            else{
                $("#subopcion1b").show();
                $("#subopcion1b").css("display","block");
            }               
                
        });
        
        $("#opcionprincipal1").on( "click", function( event ) {
            if(($("#subopcion1a").css("display")!=="none")){
                 $("#subopcion1a").css("display","none");
            }
            else{
                $("#subopcion1a").show();
                $("#subopcion1a").css("display","block");
            }               
                
        });
        
        $("#opcionprincipal1").on( "click", function( event ) {
            if(($("#subopcion1c").css("display")!=="none")){
                 $("#subopcion1c").css("display","none");
            }
            else{
                $("#subopcion1c").show();
                $("#subopcion1c").css("display","block");
            }               
                
        });
        
        $("#opcionprincipal2").on( "click", function( event ) {
            if(($("#subopcion2").css("display")!=="none")){
                 $("#subopcion2").css("display","none");
            }
            else{
                $("#subopcion2").show();
                $("#subopcion2").css("display","block");
            }               
                
        });
        
        $("#opcionprincipal3").on( "click", function( event ) {
            if(($("#subopcion3").css("display")!=="none")){
                 $("#subopcion3").css("display","none");
            }
            else{
                $("#subopcion3").show();
                $("#subopcion3").css("display","block");
            }               
                
        });
        
        $('[data-toggle="tooltip"]').tooltip();
        </script>
</html>
