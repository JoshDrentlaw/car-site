<?php
    if(isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
    }
?>
<?php require 'inc/header.php'; ?>
    <h1>Contact</h1>
    <form method="POST" action="contact.php">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email">
        </div>
    </form>
<?php require 'inc/footer.php'; ?>