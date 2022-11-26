<?php

$id_books = $_GET['book'];
$books_dashboard = new view($dbdata);
$book = $books_dashboard->books_dashboard($id_books); ?>


<form method="POST">
    <input value="<?php echo $book['order_books'] ?>" disabled>
    <input type="number" name="order_books" value="<?php echo $book['order_books'] ?>" placeholder="order_books">
    <input type="submit" name="#" value="Edit" />
</form>
<form method="POST">
    <input value="<?php echo $book['title_books'] ?>" disabled>
    <input type="text" name="title_books" value="<?php echo $book['title_books'] ?>" placeholder="title_books">
    <input type="submit" name="#" value="Edit" />
</form>
<form method="POST">
    <input value="<?php echo $book['price_books'] ?>" disabled>
    <input type="number" name="price_books" value="<?php echo $book['price_books'] ?>" placeholder="price_books">
    <input type="submit" name="#" value="Edit" />
</form>
<form method="POST">
    <input value="<?php echo $book['total_books'] ?>" disabled>
    <input type="number" name="price_books" value="<?php echo $book['total_books'] ?>" placeholder="total_books">
    <input type="submit" name="#" value="Edit" />
</form>
<form method="POST">
    <input value="<?php echo $book['amount_books'] ?>" disabled>
    <input type="number" name="amount_books" value="<?php echo $book['amount_books'] ?>" placeholder="amount_books">
    <input type="submit" name="#" value="Edit" />
</form>
<form method="POST">
    <input value="<?php echo $book['estimation_books'] ?>" disabled>
    <input type="text" name="estimation_books" value="<?php echo $book['estimation_books'] ?>" placeholder="estimation_books">
    <input type="submit" name="#" value="Edit" />
</form>

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