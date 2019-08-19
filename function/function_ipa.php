<?php

function ipa_a1($ipa_a1)
{
    if ($ipa_a1 < 60) {
        return    $ipa_a1 = 0;
    } elseif ($ipa_a1 > 59 && $ipa_a1 < 70) {
        return    $ipa_a1 = 0.50;
    } elseif ($ipa_a1 > 69 && $ipa_a1 < 80) {
        return    $ipa_a1 = 0.75;
    } elseif ($ipa_a1 >= 80) {
        return    $ipa_a1 = 0.75;
    }
}


function ipa_a2($ipa_a2)
{
    if ($ipa_a2 < 60) {
        return    $ipa_a2 = 0;
    } elseif ($ipa_a2 > 59 && $ipa_a2 < 70) {
        return    $ipa_a2 = 0.25;
    } elseif ($ipa_a2 > 69 && $ipa_a2 < 80) {
        return    $ipa_a2 = 0.50;
    } elseif ($ipa_a2 >= 80) {
        return    $ipa_a2 = 0.75;
    }
}


function ipa_a3($ipa_a3)
{
    if ($ipa_a3 < 60) {
        return    $ipa_a3 = 0;
    } elseif ($ipa_a3 > 59 && $ipa_a3 < 70) {
        return    $ipa_a3 = 0.25;
    } elseif ($ipa_a3 > 69 && $ipa_a3 < 80) {
        return    $ipa_a3 = 0.25;
    } elseif ($ipa_a3 >= 80) {
        return    $ipa_a3 = 0.50;
    }
}



function ipa_a4($ipa_a4)
{
    if ($ipa_a4 < 60) {
        return    $ipa_a4 = 0;
    } elseif ($ipa_a4 > 59 && $ipa_a4 < 70) {
        return    $ipa_a4 = 0.25;
    } elseif ($ipa_a4 > 69 && $ipa_a4 < 80) {
        return    $ipa_a4 = 0.25;
    } elseif ($ipa_a4 >= 80) {
        return    $ipa_a4 = 0.50;
    }
}
