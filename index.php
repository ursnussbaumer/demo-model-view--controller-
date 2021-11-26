
    <?php 
        $page = $_GET['page'] ?? '';

        if ($page === '' || $page === 'home') {
            include 'views/home.view.php';
        }
        else if ($page === 'products') {
            include 'views/product.view.php';
        }
        else if ($page === 'contact') {
            include 'views/contact.view.php';
        }
        else {
            echo '404 page not found.';
        }


    ?>
