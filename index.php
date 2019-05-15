<?php 
    include 'includes/inc.dbh.php';
    $sql = "SELECT students.id, students.name, students.country, countries.code, countries.lang FROM `students` INNER JOIN `countries` ON students.country = countries.code WHERE lang = 'fr'"; 
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
    <h1>TechLaunch Students Who Speak French</h1>
    <a href="index2.php">View TL Students Who Are Asian American</a>
    <table border = "1">
        <tr>
            <td>name</td>
            <td>country</td>
            <td>language</td>
        </tr>
        <?php if ($result_check > 0) { ?>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['name']?></td>
                <td><?= $row['country']?></td>
                <td><?= $row['lang']?></td>
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
