<?php 
    include 'includes/inc.dbh.php';
    $sql = "SELECT * FROM countries WHERE lang = 'fr'"; 
    $result = mysqli_query($conn, $sql);
    $result_check = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechLaunch Students</title>
</head>
<body>
    <table></table>
    <?php 
       

        if ($result_check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['name']."<br>" ;
            }
        }
    ?>
</body>
</html>