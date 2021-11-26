<?php 
    $errors = [];   

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $productName = $_POST['product-name'] ?? '';

        if ($productName) {
            addProduct($productName, '');
        }
        else {
            array_push($errors, 'Bitte geben Sie einen Produktnamen ein');
        }
    }

    function getProducts() {
        /*
        $dbConnection = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $stmt = $dbConnection->query('SELECT * FROM products');
        foreach($stmt->fetchAll() as $x) {
            // ...
        }
        */   

        $products = [
            'Käse', 
            'Wein', 
            'Brot'
        ];

        return $products;
    }

    function addProduct($product, $category) {
        /*
        $dbConnection = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $stmt = $dbConnection->prepare('INSERT INTO products (product_name, category) 
            VALUES (:product, :cat)');
        $stmt->execute([':product' => $product, ':cat' => $category,]);
        */

        echo 'product «' . $product . "» added.";
    }
    