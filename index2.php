<?php 
    include 'includes/inc.dbh.php';
    $sql = "SELECT students.id, students.name, students.country, students.race FROM `students` WHERE race = 'asian' AND country LIKE 'usa'"; 
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
    <h1>TechLaunch Students Who Are Asian American</h1>
    <a href="index.php">View TL Students Who Speak French</a>
    <table border = "1">
        <tr>
            <td>name</td>
            <td>country</td>
            <td>race</td>
        </tr>
        <?php if ($result_check > 0) { ?>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['name']?></td>
                <td><?= $row['country']?></td>
                <td><?= $row['race']?></td>
            </tr>
            <?php } ?> 
        <?php } ?>

    </table>
    <!-- </*?php 
       

        if ($result_check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['name']."<br>" ;
            }
        }
    ?> -->
</body>
</html>