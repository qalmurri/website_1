<?php

$id_books = $_GET['book'];
$books_dashboard = new view($dbdata);
$book = $books_dashboard->books_dashboard($id_books); ?>

<?php echo $book['id_books'] ?>
<?php echo $book['title_books'] ?>