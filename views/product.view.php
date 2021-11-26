<?php 
    include 'models/product.model.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Grundlagen (MV-Architektur)</title>
</head>
<body>
    <h1> Products</h1>

    <?php if ($errors): 
    ?>
        <div id="message-area" class="notice error">
            <ul>
                <?php foreach($errors as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach; 
                ?>
            </ul>
        </div>
    <?php endif; 
    ?>

    <ul>
        <?php 
        $products = getProducts();
        foreach($products as $product) {
            echo '<li>'  . $product . '</li>';
        }
        ?>
    </ul>
    <form name="add-product-form" action="index.php?page=products" method="post">
        <fieldset>
            <legend>Add new product</legend>
            <p>
                <input type="Text" name="product-name" placeholder="Produktname..."/>
            </p>
            <button type="submit" name="submit-new-product">
                Add
            </button>
        </fieldset>
    </form>
  </body>
</html> 
