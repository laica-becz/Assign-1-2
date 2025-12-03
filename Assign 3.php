<?php
//Code Sequence
declare(strict_types=1); //Step 1

$ingredients = ['Almond Butter' => ['price' => 390.00, 'stock' => 10],
                'Cocoa Powder' => ['price' => 203.00, 'stock' => 5],
                'Maple Syrup' => ['price' => 200.00, 'stock' => 4],
                'Chocolate Frosting' => ['price' => 100.00, 'stock' => 7]
            ]; //Step 2
//Step 3
$tax_rate = 12; //12% VAT 

//Step 4
function get_reorder_message(int $stock_level): string {
    return $stock_level < 5 ? 'Yes' : 'No';
}

//Step 5
function get_total_value(float $price, int $quantity, int $tax_rate): float {
    return ($price * $quantity) * (1 + $tax_rate);
}

//Step 6
function get_tax_due(float $price, int $quantity, int $tax_rate): float {
    return ($price * $quantity) * ($tax_rate / 100);
}
?>
