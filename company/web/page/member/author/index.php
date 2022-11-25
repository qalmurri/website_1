<?php if ($member['id_part'] == "1") { ?>

    <body>
        <table>
            <tr>
                <th>Name Member</th>
                <th>Image Member</th>
                <th>Description</th>
                <th>Part</th>
            </tr>
            <?php
            $query4 = $user->author_log();
            foreach ($query4 as $log) { ?>
                <tr>
                    <td><?php echo $log['name_member']; ?></td>
                    <td><img src="../image/profil/<?php echo $log['image_member']; ?>" style="width:100px;"></td>
                    <td><?php echo $log['description_member']; ?></td>
                    <td><?php echo $log['name_part']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
<?php } else {
    include '../src/function/notfoundpage.php';
} ?>