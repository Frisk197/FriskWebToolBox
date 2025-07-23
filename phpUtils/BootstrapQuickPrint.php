<?php

namespace phpUtils;

class BootstrapQuickPrint
{
    public static function cardPrinter($title=null, $description=null, $link=null, $buttons=array(), $image=null){
        echo "<div class='card m-3' style='width: 18rem;'>";
        if($image)
            echo "<a href='$link'><img src='$image' class='card-img-top'></a>";
        echo "<div class='card-body'>
                <a href='$link'><h5 class='card-title'>$title</h5></a>
                <p class='card-text'>$description</p>";
        foreach ($buttons as $key => $value){
            echo "<button id='" . $value['id'] . "' onclick='{" . $value['onclick'] . "}' class='" . $value['class'] . "'>$key</button>";
        }
        echo "</div>";
        echo "</div>";
    }
}