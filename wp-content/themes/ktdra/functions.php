<?php
    
    $funciones = array(
        "generales",
        "wordpress",
    );

    foreach ($funciones as $file) {
        if( file_exists( __DIR__."/funciones/".$file.".php" ) ){
            include( __DIR__."/funciones/".$file.".php" );
        }
    }
?>