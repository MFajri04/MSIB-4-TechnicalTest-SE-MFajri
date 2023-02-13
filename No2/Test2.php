<?php
function dense_ranking($scores) {
    $scores_set = array_unique($scores);
    rsort($scores_set);
    $ranking = [];
    foreach ($scores as $score) {
        $ranking[] = array_search($score, $scores_set) + 1;
    }
    return $ranking;
}

$n = (int)readline();
$scores = explode(" ", readline());
$result = dense_ranking($scores);
echo implode(" ", $result) . PHP_EOL;
?>