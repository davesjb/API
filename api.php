<?php

$products = [
    [
        "id" => 1,
        "name" => "Smart Watch 1",
        "price" => 120
    ],
    [
        "id" => 2,
        "name" => "Smart Watch 2",
        "price" => 105
    ],
    [
        "id" => 3,
        "name" => "Smart Watch 3",
        "price" => 102
    ],
    [
        "id" => 4,
        "name" => "Smart Watch 4",
        "price" => 103
    ],
    [
        "id" => 5,
        "name" => "Smart Watch 5",
        "price" => 101
    ]

];

// Request Types
// 1. GET 
// 2. POST

// echo "<pre>";
// print_r($products);
// die();

// JSON Format

// $params = [
//     "id" => 10
// ];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // GET ALL PRODUCTS - ENDPOINT #1
    if (isset($_GET["endpoint"]) && $_GET["endpoint"] == "products") {
        echo json_encode($products = ["id" => 1]);
    }

    // GET SPECIFIC PRODUCT BY ID - ENDPOINT #2
    if (isset($_GET["endpoint"]) && $_GET["endpoint"] == "products") {
        echo json_encode($products = ["id" => 2]);
    }
}

// echo json_encode($products);

    // $_SERVER
