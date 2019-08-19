<?php

function bind_a1($bind_a1)
{
    if ($bind_a1 < 60) {
        return    $bind_a1 = 0;
    } elseif ($bind_a1 > 59 && $bind_a1 < 70) {
        return    $bind_a1 = 0.25;
    } elseif ($bind_a1 > 69 && $bind_a1 < 80) {
        return    $bind_a1 = 0.50;
    } elseif ($bind_a1 >= 80) {
        return    $bind_a1 = 0.75;
    }
}



function bind_a2($bind_a2)
{
    if ($bind_a2 < 60) {
        return    $bind_a2 = 0;
    } elseif ($bind_a2 > 59 && $bind_a2 < 70) {
        return    $bind_a2 = 0.25;
    } elseif ($bind_a2 > 69 && $bind_a2 < 80) {
        return    $bind_a2 = 0.50;
    } elseif ($bind_a2 >= 80) {
        return    $bind_a2 = 0.50;
    }
}


function bind_a3($bind_a3)
{
    if ($bind_a3 < 60) {
        return    $bind_a3 = 0;
    } elseif ($bind_a3 > 59 && $bind_a3 < 70) {
        return    $bind_a3 = 0.25;
    } elseif ($bind_a3 > 69 && $bind_a3 < 80) {
        return    $bind_a3 = 0.25;
    } elseif ($bind_a3 >= 80) {
        return    $bind_a3 = 0.50;
    }
}


function bind_a4($bind_a4)
{
    if ($bind_a4 < 60) {
        return    $bind_a4 = 0;
    } elseif ($bind_a4 > 59 && $bind_a4 < 70) {
        return    $bind_a4 = 0.25;
    } elseif ($bind_a4 > 69 && $bind_a4 < 80) {
        return    $bind_a4 = 0.25;
    } elseif ($bind_a4 >= 80) {
        return    $bind_a4 = 0.50;
    }
}
