<!DOCTYPE html>
<html lang="en">
<?php
$title = "Kollektiv | Manage Accounts";
$description = "Manage accounts by creating or removing it in your system.";

$fab_icon = "add";

require("./../shared/app.php");
?>

<body>
    <?php require("./../shared/header.php"); ?>
    <?php require("./../shared/components/fab.php"); ?>

    <div class="row p-3">
        <div class="col s12 m8">
            <h4 class="purple-text text-darken-2">Manage Accounts</h4>
        </div>
        <div class="col s12 m4">
            <form action="/accounts" method="post" class="row valign-wrapper">
                <div class="input-field outlined col s9">
                    <input type="search" name="account_search" id="account_search" placeholder="Search accounts">
                </div>
                <div class="col s3">
                    <button type="submit" class="btn waves-effect waves-light purple accent-5 white-text"><i
                            class="material-icons">search</i></button>
                </div>
            </form>
        </div>
        <div class="col s12">
            <table class="striped centered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>