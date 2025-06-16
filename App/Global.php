<?php

// *** Dump DIE ***
function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die;
}
