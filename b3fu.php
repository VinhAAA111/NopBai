<?php 

function tinhToan($a, $b, $p){
    switch($p){
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        case "/":
            if ($b != 0) {
                $result = $a / $b;
            } else {
                echo "<h1>Lỗi: Không thể chia cho 0</h1>";
                return;
            }
            break;
        default:
            echo "<h1>Phép toán không hợp lệ</h1>";
            return;
    }
    return $result;
  
         
}
function hienthi($result){
    
    $kq = '<div class="ketqua">
        <p>Kết quả của bài toán này là: '.$result.' </p>
    </div>';
    echo $kq;
}
function chanLe($a){
    if ($a == 0) {
        echo "<h1>Số 0 không phải là số chẵn hay số lẻ</h1>";
    } elseif ($a % 2 == 0) {
        echo ("<h1>Đây là số chẵn</h1>");
    } else {
        echo ("<h1>Đây là số lẻ</h1>");
    }
}

function soNguyenTo($a){
    if ($a < 2) {
        echo ("<h1>Đây không phải là số nguyên tố</h1>");
        return;
    }

    for ($i = 2; $i <= sqrt($a); $i++){
        if ($a % $i == 0){
            echo ("<h1>Đây không phải là số nguyên tố</h1>");
            return;
        }
    }

    echo ("<h1>Đây là số nguyên tố</h1>");
}

?>
