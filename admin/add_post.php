<!DOCTYPE html>
<html lang="en">

<?php
include "./header.php";
?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php
    include "./navigation.php";
    ?>

    <div id="page-wrapper">

        <div class="container-fluid">
            <h1>
                <p>Add Post</p>
            </h1>

            <!-- Page Heading -->
            <?php
            if (isset($_POST["add_post"]))
            {

            }
            ?>
            <?php

            ?>
            <div class="row">
                <form action="add_post.php" method="post">
                    <input placeholder="post_title" type="text" name="post_title" id="post_title"><br/>
                    <input placeholder="post_author" type="text" name="post_author" id="post_author"><br/>
                    <input placeholder="post_date" type="date" name="post_date" id="post_date"><br/>
                    <input placeholder="post_content" type="text" name="post_content" id="post_content"><br/>
                    <input placeholder="post_tags" type="text" name="post_tags" id="post_tags"><br/>
                    <button type="submit" id="add_post" name="add_post">AddPost</button><br/>
                </form>
            </div>
            <div>
                <ul>
                    <?php
                    include "../includes/db.php";
                    $query = "SELECT * FROM posts";
                    $selected_posts = mysqli_query($connection, $query);
                    while ($post = mysqli_fetch_assoc($selected_posts))
                    {
                        echo "<p>";
                        echo "PostTitle : {$post["post_title"]}<br/>";
                        echo "Post Author : {$post["post_author"]}<br/>";
                        echo "Post Date : {$post["post_date"]}<br/>";
                        echo "Post Content : {$post["post_content"]}<br/>";
                        echo "Post Tags : {$post["post_tags"]}<br/>";
                        echo "</p><br/>";
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
