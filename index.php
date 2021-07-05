<!DOCTYPE html>
<html lang="en">
<?php
include "includes/header.php";
?>
<body>

    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php
                include "includes/db.php";
                $query = "SELECT * FROM posts";
                $posts_rows = mysqli_query($connection, $query);
                while ($post_row = mysqli_fetch_assoc($posts_rows))
                {
                   $Str = <<<HTML
                <h2>
                    <a href="#">{$post_row["post_title"]}</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">{$post_row["post_author"]}</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on {$post_row["post_date"]}</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>{$post_row["post_content"]}</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr/>
                HTML;
                   echo $Str;
                }
                ?>

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->

                <!-- Second Blog Post -->

                <!-- Third Blog Post -->

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/side_bar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php
        include "includes/footer.php";
        ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
