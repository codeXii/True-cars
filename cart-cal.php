<?php

$total = 0;

foreach ($cart_query as $item) {
    if (isset($item['price'])) {
        $total += $item['price'];
    }
}

// echo 'Total: $' . number_format($total, 2);