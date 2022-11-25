<?php

$id_books = $_GET['book'];
$books_dashboard = new view($dbdata);
$book = $books_dashboard->books_dashboard($id_books); ?>

<?php echo $book['id_books'] ?><br>
<?php echo $book['title_books'] ?><br>
<?php echo $book['price_books'] ?><br>
<?php echo $book['total_books'] ?><br>
<?php echo $book['amount_books'] ?><br>
<?php echo $book['estimation_books'] ?><br>

<?php echo $book['file_completeness'] ?><br>
<?php echo $book['editor_completeness'] ?><br>
<?php echo $book['photo_completeness'] ?><br>
<?php echo $book['foreword_completeness'] ?><br>
<?php echo $book['cvbio_completeness'] ?><br>
<?php echo $book['toc_completeness'] ?><br>
<?php echo $book['synopsis_completeness'] ?><br>
<?php echo $book['bibliografi_completeness'] ?><br>

<?php echo $book['front_cover'] ?><br>
<?php echo $book['back_cover'] ?><br>