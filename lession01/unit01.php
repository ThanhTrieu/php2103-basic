<?php
    // code php nam o day - cu phap comment tren 1 dong
    /*
        comment
        tren 
        nhieu
        dong
    */
    /*
        - scripting language
        - ngon ngu thong dich (bien dich)
    */
    echo "Hello word"; // keyword (khong phai la ham) - hien thi chuoi (string) ra ngoai man hinh
    echo "<br/>"; // du dung php de render HTML ra ngoai trinh duyet
    // khai bao bien
    $myName = 'Thanh Trieu'; // $ - keyword : myName - ten bien : 'Thanh Trieu' - gia tri cua bien
    // loi khi khai bao bien
    // $ myName; // sai - khong co khoang trang giua tua khoa $ va ten bien
    // $1abc; // sai - ten bien khong bat dau bang so

    /************ cac kieu du lieu co ban *****************/
    // 1 - int
    $number = 10;
    // - kiem tra kieu du lieu cua bien
    var_dump($number); // ham - function : kieu du lieu va gia tri bien cua bien
    echo "<br/>";
    // lay ra kieu du lieu
    echo gettype($number); // ham - function : chi tra ve kieu du lieu
    // php ko quy dinh san kieu du lieu cho bien - kieu du lieu cua bien chi dc xac dinh khi dc gan gia tri

    //$myAge; // bien nay chua he duoc dinh nghia - vi mac dinh gan kieu du lieu la null (vi chua dc gan gia tri)
    echo "<br/>";
    //echo gettype($myAge);
    echo "<br/>";
    //var_dump($myAge);
    echo "<br/>";

    // 2 - float - double
    $a = 3.14;
    var_dump($a);
     
    // 3 - string
    $myAddress = 'Ha Noi city'; // nam trong nhay don hoac nhay kep (dau hieu nhan biet)
    echo "<br/>";
    echo gettype($myAddress);

    // 4 - boolean
    $checking = false; // chi co 2 gia tri true or false
    echo "<br/>";
    echo gettype($checking);
    echo "<br/>";
    // mot bien duoc goi la ton tai trong php khi nao ? da duoc khai va khong duoc gan gia tri la null;

    /*********************************** khai bao hang so *****************************************/
    define('PI', 3.14); // khong khai bao trong class
    const MY_EMAIL = 'my@example.com'; // khai bao trong class (oop)
    // thong thuong quy uoc dat ten : viet hoa va cac tu cach nhau dau gach duoi
    // quy uoc dat ten bien: 
    //  + viet thuong tat cac cac chu cai va cach nhau dau dach duoi: my_name
    //  + viet thuong chu cai dau tien cua tu, chu cai dau cua tu tiep theo se viet hoa: myName
    echo MY_EMAIL; // khong duoc dung tu khoa $
    echo "<br/>";
    echo PI; // 3.14
    echo "<br/>";

    $test = 'hello word';
    $a = 'test';  // gia tri lai la ten cua mot bien
    echo $$a; // $$ khong phai dung de khai bao bien - dung de tham chieu den gia tri cua bien
    //$$text = 'aaa'; // sai