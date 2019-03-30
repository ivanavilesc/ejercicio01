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
        
        <?php include('./frame.php');
        ?>
        
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
            <center><h2>Titulo de Pagina</h2></center>
        </div>
        <div id="contenido">
            <p>Hola, este texto está en fuente Ubuntu !</p>
        </div>
    </body>
</html>
