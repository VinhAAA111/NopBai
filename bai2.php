<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
    
</head>
<style>
    h1 {
        text-align:center;
    }
     table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color:#4CAF50;
        }
        tr:nth-child(odd){
            background-color:grey;
            
        }
        

        .navtrang a {
            padding: 10px;
            margin-left: 10px;
            border: 1px solid black;
            background: #4CAF50;
            color: white;
        }
        .navtrang a:hover {
            color:red;
            border: 1px solid yellow;
            transition: all 0.3s ease-in-out 0s
            
        }
        .navtrang {
            margin-top: 30px;
            text-align:center;
        }
</style>
<body>
    <h1>Thông tin sách</h1>
    <?php
    // Tạo mảng chứa 100 cuốn sách
    $sach = array_map(function ($i) {
        return ['stt' => $i, 'tensach' => "Tensach$i", "noidungsach" => "Noidungsach$i"];
    }, range(1, 100));

    $sachTrenMotTrang = 10;
    $trangHienTai = isset($_GET['trang']) ? (int)($_GET['trang']) : 1;
    $trangBatDau = ($trangHienTai - 1) * $sachTrenMotTrang;
    $sachHienTai = array_slice($sach, $trangBatDau, $sachTrenMotTrang);

    $tongSoTrangSach = ceil(count($sach) / $sachTrenMotTrang);
    ?>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Nội dung sách</th>
        </tr>
        <?php foreach ($sachHienTai as $item): ?>
            <tr>
                <td><?php echo $item["stt"]; ?></td>
                <td><?php echo $item["tensach"]; ?></td>
                <td><?php echo $item["noidungsach"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="navtrang">
        <?php
        for ($i = 1; $i <= $tongSoTrangSach; $i++) {
            echo '<a href="?trang=' . $i . '">' . $i . '</a> ';
        }
        ?>
    </div>
</body>

</html>
