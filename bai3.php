<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
    <link rel="stylesheet" href="bai3.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #4CAF50;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        div {
            margin-bottom: 15px;
        }

        p {
            margin: 5px 0;
        }

        select,
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: calc(100% - 22px);
            /* Adjust width to fit within padding */
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .ketqua {
            text-align: center;
            display: block;
            font-size: 25px;
            padding: 20px;
        }

        .b2 {
            margin-top: 80px;
        }
    </style>
</head>

<body>
    <div class="formb">

        <h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div>
                <p>Chọn phép tính</p>
                <input type="radio" name="pheptinh" value="+" id="cong">
                <label for="cong">+</label><br>
                <input type="radio" name="pheptinh" value="-" id="tru">
                <label for="tru">-</label><br>
                <input type="radio" name="pheptinh" value="*" id="nhan">
                <label for="nhan">*</label><br>
                <input type="radio" name="pheptinh" value="/" id="chia">
                <label for="chia">/</label><br>
            </div>
            <div>
                <p>Số thứ nhất: <input type="text" name='soa' id=""></p>
                <p>Số thứ hai: <input type="text" name="sob" id=""></p>
            </div>
            <input type="submit" name="tinhtoan" value="Tính toán">
        </form>
    </div>


    <?php
    include "./b3fu.php";

    // Xử lý phép tính
    if (isset($_POST["tinhtoan"])) {
        $soa = $_POST['soa'];
        $sob = $_POST['sob'];
        $pheptinh = $_POST['pheptinh'];
        $kq = tinhToan($soa, $sob, $pheptinh);
        hienthi($kq);
    }

   
    ?>
    <div class="formb b2">

        <h1>KIỂM TRA SỐ CHẴN LẺ VÀ SỐ NGUYÊN TỐ</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div>
                <p>Nhập số cần kiểm tra: <input type="text" name="so_kiemtra" id=""></p>
            </div>
            <div>
                <input type="submit" name="kiemtra_chanle" value="Kiểm tra chẵn lẻ">
                <input type="submit" name="kiemtra_snt" value="Kiểm tra số nguyên tố">
            </div>
        </form>
    </div>
    <?php
         // Kiểm tra số chẵn lẻ
    if (isset($_POST["kiemtra_chanle"])) {
        $so = $_POST['so_kiemtra'];
        chanLe($so);
    }

    // Kiểm tra số nguyên tố
    if (isset($_POST["kiemtra_snt"])) {
        $so = $_POST['so_kiemtra'];
        soNguyenTo($so);
    }
    ?>

</body>

</html>