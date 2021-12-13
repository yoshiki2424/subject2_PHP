<?php

$master_array = [
    '1' => [101, 102, 106],
    '2' => [202, 203],
    '3' => [],
    '4' => [405, 406],
    '5' => [501, 502, 503],
    '6' => [601, 602, 603, 604, 605, 606],
];

// 合計何通配ったのか知るため初期値0で変数に格納しておく
$newspaper_number = 0;

foreach ($master_array as $floor_number => $room_number) {
    // 数値のままだとエラーが出てしまうため配列の中の数を文字列に変換している
    $str = implode(",", $room_number);
    if ($str) {
        echo "{$floor_number}階には、{$str}へ配りました。";
        // 配列の要素の数を変数($newspaper_number)へ加算している
        $newspaper_number += count($room_number);
        echo "\n";
    } elseif ($str == "") {
        echo "{$floor_number}階には、配りませんでした。";
        echo "\n";
    }
}

echo "合計で{$newspaper_number}通を配りました";

?>