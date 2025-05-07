<?php

require_once __DIR__ . "/CustomPageStructures/DefaultPageStructure.php";

use CustomPageStructures\DefaultPageStructure;

DefaultPageStructure::buildDefaultPage('Title', 'subTitle', function (){
    echo "content of the page";
});