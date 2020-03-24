<?php
// P102
function myFunc(){
    // すべての引数を変数に設定
    $allArgs = func_get_args();
    // 引数の値を合計する
    $total = array_sum($allArgs);
    // 引数の個数を変数に設定
    $numArgs = func_num_args();
    // 引数の個数が存在する場合、平均値計算、引数の最後の値取得
    // それ以外は変数の$average,$total="(データ無し)"
    if($numArgs > 0){
        $average = $total / $numArgs;
        $lastValue = $allArgs[$numArgs - 1];
    } else {
        $average = $total = "(データ無し)";
    }

    // 合計、平均、最後の点数を出力
    echo $total, "\n";
    echo $average, "\n";
    echo $lastValue, "\n";

}

//実行：引数43 67 55 75
myFunc(43, 67, 55, 75);
?>