<?php require 'inc/head.php';
require 'inc/data/products.php';



if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}

$carts = array_count_values($_SESSION['add_to_cart']);

?>
<section class="cookies container-fluid">
    <div class="row">
        <ul>
            <?php foreach ($carts as $cart => $value) : ?>
                <li class="list-group-item">
                    <p> <?php $catalog[$cart]['name'] ?> </p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>