<?php

namespace phpUtils;

class RandomGenerator
{
    static function GenerateRandomString($length=10, $charList="azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789"): string
    {
        $randomString = "";
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $charList[rand(0, strlen($charList)-1)];
        }
        return $randomString;
    }
}