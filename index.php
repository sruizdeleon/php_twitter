<?php

    $texto = "En un lugar de la Mancha...";
    $autor = "Miguel de Cervantes";
    $usuario = "@miguelito";

    
    $twitts =[
        ["texto"=>$texto,
        "autor"=> $autor, 
        "usuario"=>$usuario],
        ["texto"=>"No hay vida sin peligro", 
        "autor"=> "Perico de los Palotes", 
        "usuario"=>"@Ppalotes"],
        ["texto"=>"Yo soy tu padre",
        "autor"=> "Dath Vader", 
        "usuario"=>"@DarkV"],
    ];

    
    require_once "index.html";