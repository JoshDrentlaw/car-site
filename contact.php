<?php require 'inc/header.php'; ?>
    <h1>Contact</h1>
    <form method="POST" action="success.php">
        <div class="mt-4">
            <label for="name">Name</label><br>
            <input type="text" name="name" class="rounded">
        </div>
        <div class="mt-4">
            <label for="email">Email</label><br>
            <input type="email" name="email" class="rounded">
        </div>
        <button type="submit" class="btn btn-secondary mt-4">submit</button>
    </form>
<?php require 'inc/footer.php'; ?>