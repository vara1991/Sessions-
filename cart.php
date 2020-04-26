<?php 
    require 'inc/head.php'; 
    require 'inc/data/products.php';

    if($_SESSION['login'] == false){
        header('Location: login.php'); 
    }
?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <td>Ref.</td>
                    <td>Produit</td>
                    <td>Prix.U</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['add_to_cart'] as $cookiesID) {?>
                    <tr>
                        <td><?= $cookiesID ?> </td>
                        <td><?= $catalog[$cookiesID]['name'] ?> </td>
                        <td><?= $catalog[$cookiesID]['prix'] ?> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
