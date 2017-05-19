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

