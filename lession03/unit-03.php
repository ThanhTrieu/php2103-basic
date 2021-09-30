<?php
// tiep tuc ve array
// viet ham lay ra id cua duong link chi tiet bai bao vnexpress

function getIdFromLinkVnExpress($url) {
    // tra ve dc id cua url truyen vao
    // url thi la bat ky link nao theo dung dinh dang cua VNExpress
    $arrUrl = explode('-', $url); // chuyen chuoi ve mang
    $strId = end($arrUrl); // lay ra phan tu cuoi cung cua mang va khong lam thay doi mang ban dau
    $id = intval($strId);
    return $id;
}
$idPost = getIdFromLinkVnExpress('https://vnexpress.net/nganh-nghe-o-tp-hcm-duoc-mo-cua-sau-30-9-4364511.html');
//echo $idPost;

// bieu dien thong tin cua cac phong ban lam viec
$rooms = [
    [
        'id' => 101,
        'name' => 'Ke toan'
    ],
    [
        'id' => 102,
        'name' => 'Tong hop'
    ],
    [
        'id' => 103,
        'name' => 'IT'
    ]
];
// bieu dien thong tin cac cac nhan vien lam viec
// cac nhan vien se thuoc vao cac phong ban lam viec
// 1 nhan vien chi thuoc vao 1 phong lam viec
// 1 phong ban se co nhieu nhan vien lam viec cung nhau
$staffs = [
    [
        'id' => 1,
        'room_id' => 101,
        'name' => 'Test',
        'age' => 25,
        'email' => 'test@gmail.com',
        'address' => 'Ha Noi',
        'money' => 6000000,
        'gender' => 0
    ],
    [
        'id' => 2,
        'room_id' => 101,
        'name' => 'Demo',
        'age' => 21,
        'email' => 'demo@gmail.com',
        'address' => 'Hai Duong',
        'money' => 5800000,
        'gender' => 0
    ],
    [
        'id' => 3,
        'room_id' => 103,
        'name' => 'Van Teo',
        'age' => 24,
        'email' => 'vanteo@gmail.com',
        'address' => 'Thai Nguyen',
        'money' => 15000000,
        'gender' => 1
    ],
    [
        'id' => 4,
        'room_id' => 102,
        'name' => 'Van Ty',
        'age' => 24,
        'email' => 'vanty@gmail.com',
        'address' => 'Bac Giang',
        'money' => 10000000,
        'gender' => 1
    ],
    [
        'id' => 5,
        'room_id' => 102,
        'name' => 'Van Vo',
        'age' => 24,
        'email' => 'vanvo@gmail.com',
        'address' => 'Hung Yen',
        'money' => 12000000,
        'gender' => 0 // 0 - nu / 1 - nam
    ] 
];
// hien thi thong tin cua nhan vien - dong thoi hien thi dc luon ten phong nhan vien dang lam viec
// can lay them thong tin ten phong tu mang rooms sang mang staffs tuong ung voi cac mac phong trong mang staffs

foreach($staffs as $key => $staff) {
    foreach($rooms as $k => $room) {
        // kiem tra room_id cua staffs bang id cua rooms
        if($staff['room_id'] == $room['id']){
            // de lay ten phong tuong ung cho tung nhan vien dang thuoc phong do
            $staffs[$key]['room_name'] = $room['name'];
        }
    }
}