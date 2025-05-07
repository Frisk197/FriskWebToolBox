<?php

require_once __DIR__ . "/ExampleCustomPageStructures/ExampleDefaultPageStructure.php";

use ExampleCustomPageStructures\ExampleDefaultPageStructure;

ExampleDefaultPageStructure::buildDefaultPage('Title', 'subTitle', function (){
    echo "content of the page";
});