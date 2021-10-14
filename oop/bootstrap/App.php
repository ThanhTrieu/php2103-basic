<?php

namespace bootstrap;

// Noi nay se la noi giup cho viec autoload file
// se la thang trung gian - giup tu dong load file o noi nhung noi mong muon

// ten file se trung ten class - muc dich tim file(duong dan) theo namspace
// ten namespace : thong thuong se la duong dan thu muc chua file

class App
{
    public function __construct()
    {
        spl_autoload_register(array($this,'_myAutoloadFile'));
    }

    private function _myAutoloadFile($file)
    {
        // $file : ten file can tu dong load
        // khi ma require : su dung duong dan /
        // con namespace  dung duong dan \
        // $file se duoc lay thong qua ten namespace va ten class o cho khac truyen vao
        $file = str_replace('\\','/', trim($file,'\\')) . '.php';
        require $file;
    
    }
}