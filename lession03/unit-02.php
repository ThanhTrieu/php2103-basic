<?php
// array php - kieu du lieu array
// cu phap
$arrNumbers = array(); // mot mang rong
$arrNumbersV2 = []; // mang rong - su dung no tu php 5.3 tro len

/** cac phan tu nam trong mang khong bat buoc phai cung kieu du lieu voi nhau */

// mang don - mang tuan tu
$fruit = ['cam','quyt','mit','dua','le','tao','oi'];
$arrNumbersV3 = array(1,2,3,4,5,6,7,8,9);
// hien thi mang ra
// kho dung keyword echo - chi danh cho string
// 1- var_dump
// 2 - print_r
echo "<pre>";
//var_dump($fruit);
print_r($fruit);
echo "</pre>";

// mang khong tuan tu
$student = [
    'id' => 1,
    'name' => 'Teo',
    'age' => 20,
    'address' => 'Ha Noi',
    'email' => 'teo@gmail.com',
    'phone' => '64655665'
];
echo "<pre>";
print_r($student);
echo "</pre>";

// mang da chieu
$numbers = [1,2,3,[1,2,3],4,5,6,['tao','cam','mit']];
echo "<pre>";
print_r($numbers);
echo "</pre>";
echo "<br/>";

// truy cap vao 1 phan tu nam trong mang
// cu phap: nameArray[key];
$email = $student['email'];
//echo $email;
$apple = $numbers[7][0];
//echo $apple;

// duyet qua tat cac phan tu trong mang
$myNumber = [1,2,3,4,5,6,7,8,9];
// count : dem so luong phan tu cua mang
// 1- for
for($i = 0; $i < count($myNumber); $i++) {
    echo $myNumber[$i];
    echo '<br/>';
}
// 2 - foreach
foreach($myNumber as $key => $item) {
    echo "key - {$key} / value - {$item}";
    echo '<br/>';
}

// mot so meo su dung mang
// kiem tra mang co rong ko ? 
if(empty($myNumber)){
    echo 'okie';
}
// bo sung cac phan tu vao mang
$dog = [];
$dog['name'] = 'Dog';
$dog['age'] = 2;
$dog['color'] = 'black';
echo "<pre>";
print_r($dog);
echo "</pre>";

// duyet mang da chieu
$cats = [
    [
        'id' => 1,
        'name' => 'Tom',
        'age' => 3,
        'color' => 'black',
        'weight' => 3
    ], // a cat
    [
        'id' => 2,
        'name' => 'Jerry',
        'age' => 2,
        'color' => 'white',
        'weight' => 2
    ], // a cat
    [
        'id' => 3,
        'name' => 'Hug',
        'age' => 4,
        'color' => 'black',
        'weight' => 4
    ] // a cat
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <table width="50%" border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Color</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            <!-- the mo html -->
            <?php foreach($cats as $cat): ?>
                <tr>
                    <td><?= $cat['id']; ?></td>
                    <td><?= $cat['name']; ?></td>
                    <td><?= $cat['age']; ?></td>
                    <td><?= $cat['color']; ?></td>
                    <td><?= $cat['weight']; ?></td>
                </tr>
            <?php endforeach; ?>
            <!-- the dong html -->
        </tbody>
    </table>
</body>
</html>