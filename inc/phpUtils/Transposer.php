<?php

namespace phpUtils;

class Transposer
{
    private $transposeTable = null;
    function __construct($transposerExpectedInputs = array(), $transposerOutput = array())
    {
        for ($i=0; $i<count($transposerExpectedInputs); ++$i){
            $this->transposeTable[$transposerExpectedInputs[$i]] = $transposerOutput[$i];
        }
    }

    function customTransposer($input){
        return $this->transposeTable[$input];
    }

    static function ipCodUsnTransposer(){
        $input = explode(".", $_SERVER['REMOTE_ADDR']);

        $size = count($input);
        for($i=2; $i<=$size; ++$i){
            unset($input[$i]);
        }

        $input = join(".", $input);
        switch ($input){
//            case "10.20":
//                return "HMR";
            case "10.50":
                return "JDM";
            default:
                return "HMR";
        }
    }

}