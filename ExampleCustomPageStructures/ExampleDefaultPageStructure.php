<?php

namespace ExampleCustomPageStructures;

require_once __DIR__ . "/../PageStructureCreator.php";

use FriskWebToolBox\PageStructureCreator;

class ExampleDefaultPageStructure extends PageStructureCreator{
    public static function insertHead($headFunction=null, $data=null){
        echo "<head>";
        echo "<title>Title</title>";
        echo "<meta charset=\"UTF-8\">";
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
        echo "<link rel='stylesheet' href='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/css/main.css'>";
        echo "<link rel='stylesheet' href='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/css/bootstrap/bootstrap.css'>";
        echo "<link rel='stylesheet' href='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/css/datatables.min.css'>";
        echo "<link rel='stylesheet' href='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/css/bootstrap-select/bootstrap-select.min.css'>";
        echo "<script type='text/javascript' src='https://code.jquery.com/jquery-3.7.1.js'></script>";
        echo "<script type='text/javascript' src='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/javascript/ToastScript.js'></script>";
        echo "<script type='text/javascript' src='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/javascript/hscDecode.js'></script>";
        echo "<script type='text/javascript' src='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/javascript/bootstrap/bootstrap.bundle.js'></script>";
        echo "<script type='text/javascript' src='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/javascript/SelectElement.js'></script>";
        echo "<script type='text/javascript' src='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/javascript/datatables.min.js'></script>";
        echo "<script type='text/javascript' src='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/javascript/bootstrap-select/bootstrap-select.js'></script>";
        echo "<script type='text/javascript' src='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/javascript/bootstrap-select/i18n/defaults-fr_FR.min.js'></script>";
        echo "</head>";
    }

    public static function insertHeader($headerFunction=null, $data=null, $title=null, $subTitle=null){
        echo "<header class='d-flex col'>";
        $logo = "Your-Logo-here.png";
        echo "<a href='http://" . $_SERVER['HTTP_HOST'] . "/'><img id='headerLogo' class='headerLogo' src='http://" . $_SERVER['HTTP_HOST'] . "/FriskWebToolBox/images/$logo" . "'></a>";
        echo "<div class='titleDiv'><h1>$title</h1><h5>$subTitle</h5></div>";
        echo "<div id='emptyHeaderDiv' class='d-flex justify-content-center'></div>";
        echo "</div>";

        echo "<script>

    document.getElementById(\"emptyHeaderDiv\").style.width = document.getElementById(\"headerLogo\").clientWidth + \"px\"

</script>";

        echo "</header>";
    }

    public static function insertMain($mainFunction = null, $data = null)
    {
        echo "<main>";
        echo "<div id='toastContainer' class='toast-container position-fixed bottom-0 end-0 p-3'></div>";
        if($mainFunction != null)
            $mainFunction($data);
        echo "</main>";
    }

    public static function insertBody($headerFunction=null, $headerData=null, $mainFunction=null, $mainData=null, $footerFunction=null, $footerData=null, $title=null, $subTitle=null){
        echo "<body>";
        self::insertHeader($headerFunction, $headerData, $title, $subTitle);
        self::insertMain($mainFunction, $mainData);
        parent::insertFooter($footerFunction, $footerData);
        echo "</body>";
    }

    public static function buildDefaultPage($title="Title", $subTitle="subTitle", $insertMain=null, $mainData=null){
        echo "<!DOCTYPE html>";
        echo "<html>";
        self::insertHead();
        self::insertBody(null, null, $insertMain, $mainData, null, null, $title, $subTitle);
        echo "</html>";
    }

}