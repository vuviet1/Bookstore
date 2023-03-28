<?php
//function lấy dữ liệu từ db
function index(){

}


//function lưu dữ liệu lên db
function store(){

}

//Lấy hành động đang thực hiện
$action = '';
if (isset($_GET['action'])){
    $action= $_GET['action'];
}

switch ($action){
    case '':
        //lấy dữ liệu từ db
        break;
    case 'store':
        //lưu dữ liệu lên db
        break;
}