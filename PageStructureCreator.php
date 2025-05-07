<?php

namespace FriskWebToolBox;

class PageStructureCreator{
    public static function insertHead($headFunction=null, $data=null){
        echo "<head>";
        if($headFunction != null)
            $headFunction();
        echo "</head>";
    }

    public static function insertHeader($headerFunction=null, $data=null){
        echo "<header>";
        if($headerFunction != null)
            $headerFunction($data);
        echo "</header>";
    }

    public static function insertMain($mainFunction=null, $data=null){
        echo "<main>";
        if($mainFunction != null)
            $mainFunction($data);
        echo "</main>";
    }

    public static function insertFooter($footerFunction=null, $data=null){
        echo "<footer>";
        if($footerFunction != null)
            $footerFunction($data);
        echo "</footer>";
    }

    public static function insertBody($headerFunction=null, $headerData=null, $mainFunction=null, $mainData=null, $footerFunction=null, $footerData=null){
        echo "<body>";
        self::insertHeader($headerFunction, $headerData);
        self::insertMain($mainFunction, $mainData);
        self::insertFooter($footerFunction, $footerData);
        echo "</body>";
    }
}
