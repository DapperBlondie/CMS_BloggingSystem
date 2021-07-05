<!DOCTYPE html>
<html lang="en">

<?php
include "./header.php";
?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php
    include "navigation.php";
    ?>

    <div id="page-wrapper">

        <div class="container-fluid">
            <h1>
                <p>Categories Management</p>
            </h1>

            <!-- Page Heading -->
            <?php
            include "../includes/db.php";
            if (isset($_GET["delete"]))
            {
                $cat_id = $_GET["delete"];
                $query = "DELETE FROM category WHERE cat_id={$cat_id}";
                $result_of_deletion = mysqli_query($connection, $query);
                if ($result_of_deletion)
                {
                    echo "We delete the category with this id : "."{$cat_id}";
                }else {
                    die("We can not delete : ".mysqli_error($connection));
                }
            }
            ?>
            <?php
            include "../includes/db.php";
            if (isset($_POST["add_category_submit"]))
            {
                if (empty($_POST["add_category"]))
                {
                    echo "You need to provide the name of the category.";
                }else {
                    $query = "INSERT INTO category (cat_title) VALUES ('{$_POST["add_category"]}')";
                    $result_of_insertion = mysqli_query($connection, $query);
                    if (!$result_of_insertion)
                    {
                        die("This error occurred : ".mysqli_error($connection));
                    }else {
                        echo "Insertion Affected.";
                    }
                }
            }
            ?>
            <div class="row">
                <form action="categories.php" method="post">
                    <input type="text" name="add_category" id="add_category">
                    <button type="submit" id="add_category_submit" name="add_category_submit">AddCategory</button>
                </form>
            </div>
            <div>
                <ul>
                    <?php
                    include "../includes/db.php";
                    $query = "SELECT * FROM category";
                    $result_categories = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($result_categories))
                    {
                        echo "<li>{$row["cat_id"]}:{$row["cat_title"]}</li>";
                        echo "<a href='categories.php?delete={$row["cat_id"]}'>Delete {$row["cat_title"]}</a>";
                    }
                    ?>
                </ul>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
