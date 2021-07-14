<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="./search_engine.php" method="post">
            <div class="input-group">
                <input type="text" name="search_input" class="form-control">
                <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
            </div>
        </form>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <?php
                    include "includes/db.php";
                    $sidebar_query = "SELECT * FROM category";
                    $sidebar_result = mysqli_query($connection, $sidebar_query);

                    if ($sidebar_result)
                    {
                        while ($sidebar_row = mysqli_fetch_assoc($sidebar_result))
                        {
                            echo "<li><a href=\"#\">{$sidebar_row["cat_title"]}</a></li>";
                        }
                    } else {
                        echo "<li><a href=\"#\">Nothing</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <?php
                    include "includes/db.php";
                    $sidebar_query = "SELECT * FROM category";
                    $sidebar_result = mysqli_query($connection, $sidebar_query);

                        if ($sidebar_result)
                        {
                            while ($sidebar_row = mysqli_fetch_assoc($sidebar_result))
                            {
                                echo "<li><a href=\"#\">{$sidebar_row["cat_title"]}</a></li>";
                            }
                        } else {
                            echo "<li><a href=\"#\">Nothing</a></li>";
                        }
                    ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>
</div>

<?php ?>