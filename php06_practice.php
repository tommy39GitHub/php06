<?php
#課題１
function double($i){
    return $i * 2;
}

echo double(101) . "\n";

#課題２
function a_plus_b($a, $b){
    
    return $a + $b;
}

echo a_plus_b(222, 303) . "\n";


/*　課題３　$arr という配列の仮引数を持ち、
数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成*/
function array_times($arr){
    $result = 1;
    foreach($arr as $num){
        
        $result = $result * $num;
        echo $result . "\n";
    }
    
    return $result;
}
$arr = array(3, 2, 4);
echo array_times($arr) . "\n";


/*課題４　配列の中で1番大きい値を返す max_array という関数を実装*/
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if ($a >= $max_number) {
        $max_number = $a;
         echo $max_number . "\n";
    }
  }
  return $max_number;
}
 
echo max_array(array(5, 6, 3)) . "\n";


#課題５　ビルトイン関数の用途、使い方を調べて実際に使って
//HTMLタグ や PHPタグ を取り除いてくれる関数 strip_tags
$text = "<p>テキスト</p>";
  echo strip_tags($text);

// arry_pushで配列の一番最後に追加
$array = ["apple", "orange", "melon"];
    var_dump($array);
    
array_push($array, "grape", "grapefruit");
    print_r($array);

// array_merge 配列の結合
$arr1 = array("beef", "pork", "chicken");
$arr2 = array("lamb", "duck", "vanison");

$arr_all = array_merge($arr1, $arr2);
    var_dump($arr_all);


//time  

echo time() . "\n";


/*mktime*/
echo mktime(13, 31, 25, 6, 12, 2022) . "\n";

//date

echo date("d日m月y年") . "\n";
