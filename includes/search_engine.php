<?php

include "db.php";
if (isset($_POST["submit"]))
{
    $input = $_POST["search_input"];

    $searh_query = "SELECT * FROM posts WHERE post_tags LIKE '%$input%'";
    $search_result = mysqli_query($connection, $searh_query);

    if (!$search_result)
    {
        die("We Die Here : ".mysqli_error($connection)."\n");
    }

    if ($search_result)
    {
        while ($search_row = mysqli_fetch_assoc($search_result))
        {
            $Str = <<<HTML
                <h2>
                    <a href="#">{$search_row["post_title"]}</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">{$search_row["post_author"]}</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on {$search_row["post_date"]}</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>{$search_row["post_content"]}</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr/>
                HTML;
            echo $Str;
        }
    } elseif (mysqli_field_count($search_result)===0) {
        echo "There is nothing to see here";
    }
}