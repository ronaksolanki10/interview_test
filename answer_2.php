<?php

include "input.php";

$monthlyHalfPayment = $monthlyRent / 2;
$tomOwed = 0;
$sueOwed = 0;

for ($i = 0; $i < 5 ; $i++) { 
	if ($tomPayments[$i] < $monthlyHalfPayment) {
		$tomOverdue = $monthlyHalfPayment - $tomPayments[$i];
		$tomPanelty = 25 + 0.02 * $tomOverdue;
		$tomOwed+= $tomOverdue + $tomPanelty;
	}
	if ($suePayments[$i] < $monthlyHalfPayment) {
		$sueOverdue = $monthlyHalfPayment - $suePayments[$i];
		$suePanelty = 25 + 0.02 * $sueOverdue;
		$sueOwed+= $sueOverdue + $suePanelty;
	}
}