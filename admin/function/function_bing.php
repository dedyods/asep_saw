<?php

function bing_a1($bing_a1)
{
    if ($bing_a1 < 60) {
        return    $bing_a1 = 0;
    } elseif ($bing_a1 > 59 && $bing_a1 < 70) {
        return    $bing_a1 = 0.25;
    } elseif ($bing_a1 > 69 && $bing_a1 < 80) {
        return    $bing_a1 = 0.50;
    } elseif ($bing_a1 >= 80) {
        return    $bing_a1 = 0.75;
    }
}


function bing_a2($bing_a2)
{
    if ($bing_a2 < 60) {
        return    $bing_a2 = 0;
    } elseif ($bing_a2 > 59 && $bing_a2 < 70) {
        return    $bing_a2 = 0.25;
    } elseif ($bing_a2 > 69 && $bing_a2 < 80) {
        return    $bing_a2 = 0.25;
    } elseif ($bing_a2 >= 80) {
        return    $bing_a2 = 0.50;
    }
}


function bing_a3($bing_a3)
{
    if ($bing_a3 < 60) {
        return    $bing_a3 = 0;
    } elseif ($bing_a3 > 59 && $bing_a3 < 70) {
        return    $bing_a3 = 0.25;
    } elseif ($bing_a3 > 69 && $bing_a3 < 80) {
        return    $bing_a3 = 0.25;
    } elseif ($bing_a3 >= 80) {
        return    $bing_a3 = 0.50;
    }
}

function bing_a4($bing_a4)
{
    if ($bing_a4 < 60) {
        return    $bing_a4 = 0.25;
    } elseif ($bing_a4 > 59 && $bing_a4 < 70) {
        return    $bing_a4 = 0.50;
    } elseif ($bing_a4 > 69 && $bing_a4 < 80) {
        return    $bing_a4 = 0.50;
    } elseif ($bing_a4 >= 80) {
        return    $bing_a4 = 0.75;
    }
}
