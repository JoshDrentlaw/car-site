<?php
    if(isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
    }
?>
<?php require 'inc/header.php' ?>
    <?php echo "<h1>Thank you $name for your interest!</h1>" ?>
<?php require 'inc/footer.php' ?>