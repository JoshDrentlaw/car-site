<?php
    if(isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
    }
?>
<?php require 'inc/header.php' ?>
    <?php
        $nameHeader = "<h1>Thank you $name for your interest!</h1>";
        $emailHeader = "<h2>You should recieve a confirmation at $email.</h2>";
        $disclaimer = "<p class=\"small muted\">Not really though...</p>";
        echo($nameHeader);
        echo($emailHeader);
        echo($disclaimer);
    ?>
<?php require 'inc/footer.php' ?>