<?php
declare(strict_types=1);

final class FuelCalculator
{
    public static function calculate(float $distanceKm, array $efficiencies, array $prices): array
    {
        $results = [];
        foreach ($efficiencies as $fuel => $kmPerLiter) {
            if ($distanceKm <= 0 || $kmPerLiter <= 0 || !isset($prices[$fuel]) || $prices[$fuel] <= 0) {
                throw new InvalidArgumentException('Dados de cálculo inválidos.');
            }
            $liters = $distanceKm / $kmPerLiter;
            $results[$fuel] = ['liters' => $liters, 'cost' => $liters * $prices[$fuel]];
        }
        uasort($results, static fn(array $a, array $b): int => $a['cost'] <=> $b['cost']);
        return $results;
    }
}
