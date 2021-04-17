<?php

use Api\DBClass;

include '../vendor/autoload.php';

$data = DBClass::getTableMenu();

//    if ($data)
//        $request = [
//            'status' => 'success',
//        ];
//    else
//        $request = [
//            'status' => 'fail',
//        ];

//print_r($data);

echo json_encode($data, JSON_UNESCAPED_UNICODE);
