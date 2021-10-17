<?php
include_once "Student.php";
include_once "StudentManager.php";

$studentManager = new StudentManager();

$students = $studentManager->getAllStudents();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<a href="AddStudent.php"><button>AddStudent</button></a>
<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Math Score</th>
        <th>Physic Score</th>
        <th>Chemistry Score</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $key => $student): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $student->getName() ?></td>
            <td><?php echo $student->getMath() ?></td>
            <td><?php echo $student->getPhysic() ?></td>
            <td><?php echo $student->getChemistry() ?></td>
            <td><a onclick="return confirm('really ?')" href="DeleteStudent.php?id=<?php echo $key ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
