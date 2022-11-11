<?php
session_start();

echo $_SESSION['id_member'];
echo $_SESSION['name_section'];
echo $_SESSION['id_setting'];
?>

<ul>
    <li><a href="?page=faq">faq</a></li>
    <li><a href="?page=info">info</a></li>
    <li><a href="?page=statistics">statistics</a></li>
    <li><a href="../logout.php">logout</a></li>
</ul>