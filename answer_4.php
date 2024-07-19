<?php

include "input.php";

$totalChrisKept = 0;

for ($i = 0; $i < 5; $i++) {
    $totalPaid = $tomPayments[$i] + $suePayments[$i];
    $needed = $monthlyRent - $totalPaid;
    if ($needed <= 0) {
        $totalChrisKept += abs($needed);
    }
}
$estimateForNextSevenMonths = ($totalChrisKept / 5) * 7;