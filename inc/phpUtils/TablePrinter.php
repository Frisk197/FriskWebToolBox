<?php

namespace phpUtils;

class TablePrinter
{
    public static function rawPrint($table, $id="", $withSelectButton=false){
        echo "<div class='d-flex justify-content-center row'>";
        if ($withSelectButton)
            echo "<div class='d-flex justify-content-center mb-2'><button class='d-flex btn btn-primary' onclick='SelectElement(\"$id\")'>Sélectionner le tableau</button></div>";
        echo "<table id='$id' class='table table-striped table-hover table-bordered'>";
        echo "<thead>";
        echo "<tr>";
        if($table != null){
            foreach (array_keys($table[0]) as $key => $value){
                echo "<th>$value</th>";
            }
        }
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        if($table != null){
            foreach ($table as $keyLine => $line){
                echo "<tr>";
                foreach ($line as $keyCell => $cell){
                    echo "<td>$cell</td>";
                }
                echo "</tr>";
            }
        }
        echo "</tbody>";
        echo "<tfoot></tfoot>";
        echo "</table>";
        echo "</div>";
    }

    public static function iteratorPrint($id = "", $withSelectButton = false, $striped = true){
        echo "<div class='d-flex justify-content-center row'>";
        if ($withSelectButton)
            echo "<div class='d-flex justify-content-center mb-2'><button class='d-flex btn btn-primary' onclick='SelectElement(\"$id\")'>Sélectionner le tableau</button></div>";
        if($striped)
            echo "<table id='$id' class='table table-striped table-hover table-bordered'>";
        else
            echo "<table id='$id' class='table table-hover table-bordered'>";
        $thead = yield;
        echo "<thead>";
        echo "<tr>";
        foreach ($thead as $key => $value){
            echo "<th class='" . $value['class'] . "'>" . $value['value'] . "</th>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        do{
            $line = yield;
            if($line !== "END"){
                echo "<tr class='" . $line['lineClass'] . "'>";
                foreach ($line['lineValue'] as $keyCell => $cell){
                    echo "<td class='" . $cell['cellClass'] . "'>" . $cell['cellValue'] . "</td>";
                }
                echo "</tr>";
            }
        }while($line !== "END");
        echo "</tbody>";
        echo "<tfoot></tfoot>";
        echo "</table>";
        echo "</div>";
    }
}