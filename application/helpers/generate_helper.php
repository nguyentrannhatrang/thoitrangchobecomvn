<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

function generateBookingId($src)
{
    if(strlen($src)>2) $src = substr($src,0,2);
    $src = strtoupper($src);
    return $src.strtoupper(sprintf( '%04x',mt_rand(0, 0xffff ))).time();
}

/**
 * @param $strStart
 * @param $strEnd
 * @param $strContent
 * @return array
 */
function PartitionString($strStart,$strEnd,$strContent)
{
    $arrStr=array();

    $intStart=strpos($strContent,$strStart,0);
    $intEnd=strpos($strContent,$strEnd,(int)$intStart);
    if($intStart===false || $intStart===false)
    {
        $arrStr[0]=$strContent;
        $arrStr[1]='';
        $arrStr[2]='';
        return $arrStr;
    }
    $arrStr[0]=substr($strContent,0,$intStart);
    $arrStr[1]=substr($strContent,$intStart+strlen($strStart),$intEnd-$intStart-strlen($strStart));
    $arrStr[2]=substr($strContent,$intEnd+strlen($strEnd));
    return $arrStr;
}

