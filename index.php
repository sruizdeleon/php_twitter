<?php

$datos = file_get_contents("twits.json");

$array_datos = json_decode($datos, true);


    require_once "index.html";