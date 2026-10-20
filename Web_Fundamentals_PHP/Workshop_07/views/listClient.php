<?php
include "../controller/clientC.php";

$c = new ClientC();
$tab = $c->listClients();

?>

<table border="1" align="center" width="70%">
    <tr>
        <th>Id Client</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Date of Birth</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach ($tab as $client) {
    ?>
        <tr>
            <td><?= $client['IDclient']; ?></td>
            <td><?= $client['LastName']; ?></td>
            <td><?= $client['FirstName']; ?></td>
            <td><?= $client['Adress']; ?></td>
            <td><?= $client['DOB']; ?></td>
            <td align="center">
                <form method="POST" action="updateClient.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $client['IDclient']; ?> name="IDclient">
                </form>
            </td>
            <td>
                <a href="deleteClient.php?id=<?php echo $client['IDclient']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>