<?php require 'connection.php' ?>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>email</th>
            <th>phoneNumber</th>
        </tr>
    </thead>
    <tbody>
        <?php $query = $pdo->query("SELECT * FROM contacts ORDER BY id ASC");
        while ($array = $query->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <th><?= $array['id'] ?></th>
                <td><?= $array['name'] ?></td>
                <td><?= $array['email'] ?></td>
                <td><?= $array['phoneNumber'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>