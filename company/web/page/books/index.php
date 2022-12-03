<body>
    <table>
        <tr>
            <th>No Order</th>
            <th>Judul</th>
            <th>Penulis</th>
        </tr>
        <?php
        $query3 = $user->order();
        foreach ($query3 as $log) { ?>
            <tr>
                <td><?php echo $log['order_books']; ?></td>
                <td><a href="?page=books/detail&book=<?php echo $log['id_books']; ?>"><?php echo $log['title_books']; ?></a></td>
                <td><?php
                    $category = new view($dbcategory);
                    $hasil = $category->author_book($log['id_books']);
                    foreach ($hasil as $author) { ?>
                        <a href="../?page=author/detail&author=<?php echo $author['id_member'] ?>"><?php echo $author['name_member'] ?></a><br>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>