<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinh tong hai so</title>
</head>
<body>
    <?php
        $state = $_GET['state'] ?? '';
        $n1 = $_GET['n1'] ?? '';
        $n2 = $_GET['n2'] ?? '';
        $result = $_GET['result'] ?? '';
    ?>

    <?php if($state === 'error'): ?>
        <p style="color: red;">Vui long nhap so </p>
    <?php endif; ?>

    <form method="post" action="lession-04.php">
        <label> n1: </label>
        <input type="text" name="n1" value="<?php echo $n1; ?>"/>
        <br/><br/>
        <label> n2: </label>
        <input type="text" name="n2" value="<?php echo $n2; ?>"/>
        <br><br>
        <button type="submit" name="btnSum"> Tinh Tong</button>
    </form>

    <?php if($state === 'success' && $result !== ''): ?>
        <h2>Ket qua: <?= $result; ?></h2>
    <?php endif; ?>
</body>
</html>