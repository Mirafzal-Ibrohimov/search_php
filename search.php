<?php
    $bd = mysqli_connect("localhost", "root", "", "searchex");   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <?
    if($bd){
        if(isset($_POST['search_btn'])) {
            $search = $_POST['search'];
            $sql = mysqli_query($bd, "SELECT * FROM search WHERE names LIKE '%$search%'");
            while ($lang = mysqli_fetch_assoc($sql)) {
                echo $lang['names'];
                echo "<br>";
            }
        }
    }

    ?>
</body>
</html>