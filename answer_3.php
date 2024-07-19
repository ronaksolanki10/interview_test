<?php

include "input.php";

$totalChrisPaid = 0;
$totalChrisKept = 0;

for ($i = 0; $i < 5; $i++) {
    $totalPaid = $tomPayments[$i] + $suePayments[$i];
    $needed = $monthlyRent - $totalPaid;
    if ($needed > 0) {
        $totalChrisPaid += $needed;
    } else {
        $totalChrisKept += abs($needed);
    }
}