<?php

namespace FriskWebToolBox\phpUtils;

class DateSelector
{
    function __construct($id=null, $classList=null, $defaultDate=null, $functionCallback="", $btnFunctionCallback="")
    {

        echo "<div class='d-flex justify-content-center fit-content $classList'>
        <button class='btn btn-primary' onclick='{
            let date = new Date(document.getElementById(\"$id\").value)
            date.setDate(date.getDate() - 1)
            document.getElementById(\"$id\").value = date.toISOString().substring(0, 10)
            $btnFunctionCallback
        }'> < </button>
        <input $functionCallback id='$id' class='form-control' type='date' value='$defaultDate'>
        <button class='btn btn-primary' onclick='{
            let date = new Date(document.getElementById(\"$id\").value)
            date.setDate(date.getDate() + 1)
            document.getElementById(\"$id\").value = date.toISOString().substring(0, 10)
            $btnFunctionCallback
        }'> > </button>
        </div>";
    }
}