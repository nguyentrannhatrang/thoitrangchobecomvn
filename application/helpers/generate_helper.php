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

