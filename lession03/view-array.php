<?php
    // nhung file khac vao
    require 'unit-03.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin nhan vien</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center my-3">Thong tin nhan vien</h1>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Ma NV</th>
                            <th>Ho ten</th>
                            <th>Ten phong</th>
                            <th>Tuoi</th>
                            <th>Gioi tinh</th>
                            <th>Email</th>
                            <th>Dia chi</th>
                            <th>Tien luong</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $totalMoney = 0; ?>
                        <?php foreach($staffs as $key => $item): ?>
                            <?php $totalMoney += $item['money']; ?>
                            <tr>
                                <td><?= $item['id']; ?></td>
                                <td><?= $item['name']; ?></td>
                                <td><?= $item['room_name']; ?></td>
                                <td><?= $item['age']; ?></td>
                                <td><?= $item['gender'] == 0 ? 'Nu' : 'Nam'; ?></td>
                                <td><?= $item['email']; ?></td>
                                <td><?= $item['address']; ?></td>
                                <td><?= number_format($item['money']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">Tong tien luong thanh toan</td>
                            <td> <?= number_format($totalMoney); ?> </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
</html>