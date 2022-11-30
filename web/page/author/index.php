<?php
$query3 = $user->author_web();
foreach ($query3 as $log) {
    $count2 = $user->author_count($log['id_member']);
    foreach ($count2 as $author2)  ?>

    <?php echo $log['name_member']; ?> (<?php echo $author2 ?> Buku)
    <a href="?page=author/detail&author=<?php echo $log['id_member']; ?>">detail</a><br>

<?php } ?>