<?php

namespace FriskWebToolBox\phpUtils;

class PathLinkPrinter
{
    public static function printPathLink($path=array()){
        echo "<div class='d-flex col'>";
        foreach ($path as $key => $value){
            if($value['name'] != "Home"){
                echo "<p class='ms-2 me-2'> > </p>";
            }
            echo "<a href='" . $value['link'] . "'>";
            if(!empty($value['image'])){
                echo "<img style='height: 25px; width: auto;' src='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/images/" . $value['image'] . "'>";
            } else if(!empty($value['name'])){
                echo $value['name'];
            } else {
                echo $value['link'];
            }
            echo "</a>";
        }
        echo "</div>";
    }
}