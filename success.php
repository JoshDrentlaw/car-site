<?php
    if(isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
    }
?>
<?php require 'inc/header.php' ?>
    <h1>Thank you <?php echo($name); ?> for your interest!</h1>
    <h2>You should recieve a confirmation at <?php echo($email); ?>.</h2>
    <p class="small muted">Not really though...</p>
<?php require 'inc/footer.php' ?>