<?php 
function chuoiSangMang($string, $dauphay) {
    $arr = [];
    $temp = "";
    $len = strlen($string);
    for($i = 0; $i < $len; $i++){
        if($string[$i] == $dauphay){
            if ($temp !== '') {
                $arr[] = $temp;
                $temp = "";
            }
        } else {
            $temp .= $string[$i];
        }
    }
    if ($temp !== '') {
        $arr[] = $temp;
    }
    return $arr;
}

function sapXep(&$arr) {
    $n = count($arr);
    for($i = 0; $i < $n - 1; $i++){
        for ($j = 0; $j < $n - $i - 1; $j++){
            if($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
}

function mangSangChuoi($arr) {
    $count = count($arr);
    $result = "";
    for ($i = 0; $i < $count; $i++){
        $result .= $arr[$i];
        if ($i < $count - 1) {
            $result .= ", ";
        }
    }
    return $result;
}
function timMax($arr){
    $max = $arr[0];
   foreach( $arr as $x){
        if ( $x > $max){
            $max = $x;
        }
   }
   return $max;
   echo ("Giá trị lớn nhất trong mảng là: " .$max);
}
function timMin($arr){
    $min = $arr[0];
    foreach( $arr as $x){
        if ( $x < $min){
            $min = $x;
        }
    }
    return $min;
    echo ("Giá trị nhỏ nhất trong mảng là: " .$min);
}
function tongMang($arr){
    $tong = 0;
    foreach( $arr as $x){
        $tong += $x;
    }
    return $tong;
}
function soCanTim($arr, $number){
    foreach ($arr as $x){
        if ($x == $number){
            return true;
        }
    }
    return false;
}


?>
