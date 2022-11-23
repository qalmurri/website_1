<?php if ($member['id_part'] == "1") { ?>

    <body>
        <table>
            <tr>
                <th>ID Log</th>
                <th>Member</th>
                <th>CRUD</th>
                <th>Action</th>
                <th>Note</th>
                <th>Date</th>
            </tr>
            <?php
            $query99 = $user->crud_log();
            foreach ($query99 as $log) { ?>
                <tr>
                    <td><?php echo $log['id_log']; ?></td>
                    <td><?php echo $log['name_member']; ?></td>
                    <td><?php echo $log['id_crud']; ?></td>
                    <td><?php echo $log['id_action']; ?></td>
                    <td><?php echo $log['note_log']; ?></td>
                    <td><?php echo $log['date_log']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
<?php } else {
    include '../src/function/notfoundpage.php';
} ?>