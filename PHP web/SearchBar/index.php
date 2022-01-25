<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search">Search</button>
    </form>


    <h1>Fornt page</h1>
    <h2>All articles</h2>

    <div class="article-container">

        <?php

$sql ="SELECT * FROM article" ;
$result = mysqli_query($conn, $sql);
$queryResult = mysqli_num_rows($result);

if($queryResult > 0)
{
    while($row = mysqli_fetch_assoc($result)){

    echo "<div class='article-box'>

    <h3>".$row['a_title']."</h3>
    <p>".$row['a_text']."</p>
    <p>".$row['a_date']."</p>
    <p>".$row['a_author']."</p>

    </div>";
}
}
?>
    </div>




</body>

</html>