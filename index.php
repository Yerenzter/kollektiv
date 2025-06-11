<!DOCTYPE html>
<html lang="en">
<?php
$title = "Kollektiv | Home";
$author = "Y23D17";
$description = "Kollektiv is a library management sytem.";

require("shared/app.php");
?>

<body>
    <?php require("shared/header.php"); ?>
    <div class="row p-3">
        <div class="col s12">
            <div class="card purple lighten-4">
                <div class="card-content p-6">
                    <div class="card-body">
                        <h1 class="purple-text text-darken-2">Welcome to Kollektiv</h1>
                        <p class="purple-text text-darken-2" style="font-size: 2rem;">
                            Manage your library with ease, save your time and effort
                            from manual
                            booking.
                        </p>
                        <p class="purple-text text-darken-2" style="font-size: 2rem;">
                            Press any icons on the upper-right side to do any actions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require("shared/footer.php") ?>
</body>

</html>