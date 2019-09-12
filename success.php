<?php
    if(isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
    }
?>
<?php require 'inc/header.php' ?>
    <?php echo "<h1>Thank you $name for your interest!</h1>" ?>
    <?php echo "<h2>You should recieve a confirmation at $email.</h2>" ?>
    <?php echo "<p class=\"small muted\">Not really though...</p>" ?>
<?php require 'inc/footer.php' ?>