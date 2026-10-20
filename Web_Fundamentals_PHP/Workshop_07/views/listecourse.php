<?php
include "../model/course.php";

$c = new course();
$tab = $c->listcourse();

?>

<table border="1" align="center" width="70%">
    <tr>
        <th>Id course</th>
        <th>label</th>
        <th>duration</th>
        <th>nbplaces</th>
        <th>Date course</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach ($tab as $course) {
    ?>
        <tr>
            <td><?= $course['idcourse']; ?></td>
            <td><?= $course['label']; ?></td>
            <td><?= $course['duration']; ?></td>
            <td><?= $course['nbplaces']; ?></td>
            <td><?= $course['datecourse']; ?></td>
            <td align="center">
                <form method="POST" action="updatecourse.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $course['idcourse']; ?> name="idcourse">
                </form>
            </td>
            <td>
                <a href="deletecourse.php?id=<?php echo $course['idcourse']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>