<?php
include_once 'Data.php';
include_once 'Student.php';
$result = Data::loadData();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="add-student.php">Add</a>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php foreach ($result as $student): ?>
            <tr>
                <td><?php echo $student->getId()?></td>
                <td><?php echo $student->getName()?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
