<?php

namespace phpUtils;

class PanelPrinter
{
    static public function nestedMenuLinksPrinter($menuName, $nestedLinks, $indentLevel=1){
        $padding = 3*$indentLevel . 'rem !important';
        $paddingTitle = (2*$indentLevel)-($indentLevel-1) . 'rem !important';
        $margin = ($indentLevel-1) * 3 . 'rem !important';
        echo "<div class='d-flex flex-column' style='width: 100%'>";
        echo "<div style='border-radius: 0.3rem; background-color: rgba(208, 211, 218, 0.8); padding-left: $paddingTitle; margin-left: $margin'><h3>$menuName</h3></div>";
        $i = 0;
        foreach ($nestedLinks as $key => $value){
            $btWidth = "";
            if($i == 0){
                $btWidth = 'border-top-width: 1px; border-bottom-width: 1px';
            } else {
                $btWidth = 'border-top-width: 0px; border-bottom-width: 1px';
            }
            if(is_array($value)){
                echo "<div style='border:rgba(128,128,128,0.47) solid 0; border-top-width: 0; border-bottom-width: 0' class='d-flex flex-column py-3'>";
                self::nestedMenuLinksPrinter($key, $value, $indentLevel+1);
                echo "</div>";
            } else {
                echo "<a class='linkHover' style='padding-block: 2px; padding-left: $padding; border:rgba(128,128,128,0.47) solid 0; border-bottom-width: 1px; $btWidth' href='$value'>→   $key</a>";
            }
            ++$i;
        }
        echo "</div>";
    }
}