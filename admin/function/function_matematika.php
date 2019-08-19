<?php

// Kriteria C1 = Matematika
function mtk_a1($mtk_a1)
{
    if ($mtk_a1 < 60) {
        return    $mtk_a1 = 0;
    } elseif ($mtk_a1 > 59 && $mtk_a1 < 70) {
        return    $mtk_a1 = 0.5;
    } elseif ($mtk_a1 > 69 && $mtk_a1 < 80) {
        return    $mtk_a1 = 0.75;
    } elseif ($mtk_a1 >= 80) {
        return    $mtk_a1 = 0.75;
    }
}

function mtk_a2($mtk_a2)
{
    if ($mtk_a2 < 60) {
        return    $mtk_a2 = 0;
    } elseif ($mtk_a2 > 59 && $mtk_a2 < 70) {
        return    $mtk_a2 = 0.25;
    } elseif ($mtk_a2 > 69 && $mtk_a2 < 80) {
        return    $mtk_a2 = 0.5;
    } elseif ($mtk_a2 >= 80) {
        return    $mtk_a2 = 0.75;
    }
}

function mtk_a3($mtk_a3)
{
    if ($mtk_a3 < 60) {
        return    $mtk_a3 = 0;
    } elseif ($mtk_a3 > 59 && $mtk_a3 < 70) {
        return    $mtk_a3 = 0.25;
    } elseif ($mtk_a3 > 69 && $mtk_a3 < 80) {
        return    $mtk_a3 = 0.5;
    } elseif ($mtk_a3 >= 80) {
        return    $mtk_a3 = 0.75;
    }
}


function mtk_a4($mtk_a4)
{
    if ($mtk_a4 < 60) {
        return    $mtk_a4 = 0.25;
    } elseif ($mtk_a4 > 59 && $mtk_a4 < 70) {
        return    $mtk_a4 = 0.25;
    } elseif ($mtk_a4 > 69 && $mtk_a4 < 80) {
        return    $mtk_a4 = 0.5;
    } elseif ($mtk_a4 >= 80) {
        return    $mtk_a4 = 0.75;
    }
}
