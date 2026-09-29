<?php
declare(strict_types=1);
require_once __DIR__ . '/../src/FuelCalculator.php';
$results = FuelCalculator::calculate(100, ['gasolina' => 10, 'etanol' => 7, 'diesel' => 12], ['gasolina' => 5.95, 'etanol' => 3.98, 'diesel' => 5.04]);
assert(array_key_first($results) === 'etanol');
assert(round($results['etanol']['cost'], 2) === 56.86);
echo "FuelCalculator tests passed\n";
