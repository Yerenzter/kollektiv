<!DOCTYPE html>
<html lang="en">
<?php
$title = "Kollektiv | Manage Courses";
$description = "Manage authors by creating or removing it in your system.";

$fab_icon = "add";

require("./../shared/app.php");
?>

<body>
    <?php require("./../shared/header.php"); ?>
    <?php require("./../shared/components/fab.php"); ?>

    <div class="row p-3">
        <div class="col s12 m8">
            <h4 class="purple-text text-darken-2">Manage Courses</h4>
        </div>
        <div class="col s12 m4">
            <form action="/courses" method="post" class="row valign-wrapper">
                <div class="input-field outlined col s9">
                    <input type="search" name="author_search" id="author_search" placeholder="Search courses">
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
                        <th>Code</th>
                        <th>Course</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>