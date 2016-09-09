<?php
    $jsondata = file_get_contents("movies.json");
    $jsonObject = json_decode($jsondata, true);

?>
<!DOCTYPE html>
<html>
<head>
<title>My favorit movies</title>
<style>
    h1 {text-align: center;}
    li {
        list-style: none;
        padding-left: 5px;
    }
    h4 {margin: 0; padding: 5px; background: #f4f4f4;}
    .container {
        width: 600px;
        margin: auto;
        overflow: hidden;
    }
</style>
</head> 
<body>
    <div class="container">
        <h1>My favorit movies!</h1>
        <ul>
        <?php
            foreach ($jsonObject["movies"] as $key => $value) {
                echo "<li>";
                echo "<h4>".$value["title"]."</h4>";
                echo "<div>Year:".$value['year']."</div>";
                echo "<div>Genre:".$value['genre']."</div>";
                echo "<div>Director:".$value['director']."</div>";
                echo "</li>";
            } 
        ?>
        </ul>
    </div>

</body>
</html>