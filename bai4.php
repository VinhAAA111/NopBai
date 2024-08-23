<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Mảng và Sắp Xếp</title>
</head>
<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
    form, div {
        max-width: 600px;
        padding: 20px;
        margin: 0 auto;
        border: 1px solid #4CAF50;
        border-radius: 10px;
        box-shadow:  0 0 10px rgba(0, 0, 0.1);

    }
    .tle {
        text-align: center;
    }
    div {
        margin-top: 20px;
    }
    input[type="text"]{
        
        border: 1px solid #4CAF50;
        
        box-sizing: border-box;
    }
    input[type="submit"]{
        background: #4CAF50;
        border: 1px solid green;
        cursor: pointer;
        padding: 10px;
        border-radius: 5px;
        color: white;

    }
    input[type="submit"]:hover{
        box-shadow: 0 0 5px rgba(0 , 0, 0.1);
    }
    label, input{
       display: block; 
       margin: 10px 0;
    }
    
    
   
</style>
<body>
    <h2 class='tle'>Nhập Mảng và Sắp Xếp</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="array">Nhập các phần tử của mảng:</label>
        <input type="text" id="array" name="array" required>
        <input type="submit" value="Sắp xếp">
        <label>Số cần tìm trong mảng là: </label>
        <input type="text" id="soa" name="soa">
        <input type="submit" value="Tìm số">
    </form>

    
    <?php
    include "./bai4fu.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $arrString = $_POST['array']; // lấy dữ liệu từ form
        $arr = chuoiSangMang($arrString, ",");
        sapXep($arr);
        $sapXepMang = mangSangChuoi($arr);
    
        $max = timMax($arr);
        $min = timMin($arr);
        $tong = tongMang($arr);
    
        // Kiểm tra xem người dùng có nhập số cần tìm hay không
        $soTK = isset($_POST['soa']) && $_POST['soa'] !== '' ? floatval($_POST['soa']) : null;
        $soTonTai = $soTK !== null ? soCanTim($arr, $soTK) : null;
    
        echo "
        <div>
            <h3>Mảng ban đầu là: " . htmlspecialchars($arrString) . "</h3>
            <h3>Kết Quả Sắp Xếp: " . htmlspecialchars($sapXepMang) . "</h3>
            <h3>Giá trị lớn nhất là: " . htmlspecialchars($max) . "</h3>
            <h3>Giá trị nhỏ nhất là: " . htmlspecialchars($min) . "</h3>
            <h3>Tổng các giá trị trong mảng là: " . htmlspecialchars($tong) . "</h3>";
    
        if ($soTK !== null) {
            echo "<h3>" . ($soTonTai ? "Số $soTK có trong mảng." : "Số $soTK không có trong mảng.") . "</h3>";
        }
    
        echo "</div>";
    }
    ?>
    
</body>

</html>