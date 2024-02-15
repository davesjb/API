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
        "price" => 203
    ],
    [
        "id" => 5,
        "name" => "Smart Watch 5",
        "price" => 201
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


    // GET SPECIFIC PRODUCT BY ID - ENDPOINT #2
    if ((isset($_GET["endpoint"]) && $_GET["endpoint"] == "products") && (isset($_GET["id"]))) {

        $productId = $_GET["id"];
        // echo json_encode($products = ["totla_sales" => 200]);
        foreach ($products as $product) {

            if ($productId == $product["id"]) {
                echo json_encode($product);
                // break; (loop only)
                exit();
            }
        }
    }

    if ((isset($_GET["endpoint"]) && $_GET["endpoint"] == "products")) {

        // GET SPECIFIC PRODUCT BY Price - ENDPOINT #3
        // TYPE CASTING
        if ((isset($_GET["price"]))) {
            $productPrice =  (float)$_GET["price"];

            // var_dump($productPrice); //float(300) string(3) "300"
            // die();
            $filteredProducts = [];
            foreach ($products as $product) {
                if ($product["price"] >= $productPrice) {
                    // var_dump($productPrice >= $product["price"]);
                    // die();
                    $filteredProducts[] = $product;


                    // echo json_encode($product);

                    // exit();
                }
            }
            echo json_encode($filteredProducts);
            exit();
        }
    }

    // GET ALL PRODUCTS - ENDPOINT #1
    if (isset($_GET["endpoint"]) && $_GET["endpoint"] == "products") {
        echo json_encode($products);
        exit();
    }
}

// echo json_encode($products);

    // $_SERVER
