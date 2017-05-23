<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

function getLabelStatus($status = 1)
{
    if($status == 0)
        return 'Request';
    if($status == 1)
        return 'Confirmed';
    if($status == 2)
        return 'Canceled';
    if($status == 3)
        return 'Completed';
}
function getArrayStatus()
{
    return array(0=>'Request',1=>'Confirmed',2=>'Canceled',3=>'Completed');
}

