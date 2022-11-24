    <body>
        <table>
            <tr>
                <th>No Order</th>
                <th>Judul</th>
            </tr>
            <?php
            $query3 = $user->order();
            foreach ($query3 as $log) { ?>
                <tr>
                    <td><?php echo $log['order_books']; ?></td>
                    <td><?php echo $log['title_books']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>