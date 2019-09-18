<?php require 'inc/header.php'; ?>
    <?php

    ?>

    <h1 class="display-1 text-center">Select a maker and see the latest models.</h1>
    <form>
        <select id="makerSelect" class="custom-select" name="maker">
            <?php foreach($Makes as $make): ?>
                <?php echo "<option value=\"$make\">$make</option>"; ?>
            <?php endforeach; ?>
        </select>
        <button
            type="button"
            class="btn btn-secondary d-block mx-auto mt-5 px-5 py-2"
            style="font-size: 50px;"
            onclick="getModels()"
        >
            Get Cars
        </button>
    </form>
    <div id="tableLoader" class="loader mx-auto mt-5 d-none"></div>
    <table class="table table-striped mt-5 d-none" id="modelTable">
        <thead>
            <tr>
                <th scope="col">Make</th>
                <th scope="col">Model</th>
                <th scope="col">Year</th>
            </tr>
        </thead>
        <tbody id="modelTableBody"></tbody>
    </table>

    <script>
        const Makes = <?php echo json_encode($Makes); ?>
    </script>
    <script src="scripts/index.js"></script>
<?php require 'inc/footer.php'; ?>