<?php
function sloane_sequence($n) {
    $result = [];
    for ($i = 1; $i <= $n; $i++) {
        $result[] = (int)(($i * ($i + 1)) / 2);
    }
    return $result;
}

$input_num = (int)readline("Enter a number: ");
$output = sloane_sequence($input_num);
echo implode("-", $output);
?>