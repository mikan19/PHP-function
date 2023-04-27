<?php
   
$spendings = ["apple" => 100, "orange" => 150];
echo findTotalSpending($spendings);

function findTotalSpending($spendings)
{
    $totalSpendings = 0;
    foreach ($spendings as $spending) {
        $totalSpendings += $spending;
    }
    return $totalSpendings;
}