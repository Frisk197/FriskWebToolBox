<?php

namespace phpUtils;

class BootstrapQuickPrint
{
    public static function cardPrinter($title=null, $description=null, $buttonText=null, $link=null, $image=null){
        echo "<div class='card m-3' style='width: 18rem;'>";
        if($image)
            echo "<a href='$link'><img src='$image' class='card-img-top'></a>";
        echo "<div class='card-body'>
                <a href='$link'><h5 class='card-title'>$title</h5></a>
                <p class='card-text'>$description</p>
                <a href='$link' class='btn btn-primary'>$buttonText</a>
              </div>";
        echo "</div>";
    }
}