<body>
    <section class="grid-main">
        <?php
        $query3 = $user->books_web();
        foreach ($query3 as $book) { ?>
            <div class="grid-content">
                <div class="info">
                    <p class="date"><?php echo $book['estimation_books']; ?></p>
                    <p class="author"><b>Author: </b> <?php $hasil = $user->author_book($book['id_books']);
                                                        foreach ($hasil as $author) { ?> <a href="<?php echo $author['id_member'] ?>" title="<?php echo $author['name_member'] ?>"><?php echo $author['name_member'] ?>, </a> <?php } ?> </p>
                </div>
                <h1 title="<?php echo $book['title_books']; ?>"><a class="super"><?php echo $book['order_books']; ?> </a><a href="www.google.com"><?php echo $book['title_books']; ?></a></h1>
                <hr>
                <table class="info-content">
                    <tr>
                        <td class="thumbnail">
                            <img id="i<?php echo $book['id_books']; ?>" src="image/cover/book.jpg" title="Klik untuk cover lain" alt="<?php echo $book['title_books']; ?>" onclick="cc<?php echo $book['id_books']; ?>()">
                            <p>Desainer 1</p>
                        </td>
                        <td class="specification">
                            <p class="synopsis" title="Synopsis"><b>Sinopsis - </b>Pneumonia komunitas masih menjadi penyebab rawat inap dan kematian di dunia dengan tingkat insidensi yang cukup tinggi. Penyebab tingginya angka kematian pneumonia komunitas adalah akibat respons inflamasi yang cukup tinggi. Respons inflamasi yang berlebihan akan menyebabkan kerusakan paru sehingga inflamasi atau peradangan perlu dikurangi atau dikontrol. Terapi antiinflamasi dapat menjadi terapi tambahan pada pneumonia komunitas karena mampu mengurangi komplikasi respons inflamasi sistemik yang terlalu besar tanpa mengganggu proses resolusi inflamasi lokal dan menurunkan angka kematian pasien pneumonia. Pemberian terapi tambahan antiinflamasi pada berbagai macam penyakit telah dilakukan dan menunjukkan hasil yang menjanjikan. Buku ini mencakup penatalaksanaan pneumonia komunitas dengan antiinflamasi sebagai terapi tambahan, semoga buku ini bermanfaat bagi sejawat sekalian.
                                <hr>
                            <div id="se<?php echo $book['id_books']; ?>"></div>
                            <hr>
                            <label for="<?php echo $book['id_books']; ?>">Change</label>
                            <select id="<?php echo $book['id_books']; ?>" onchange="s<?php echo $book['id_books']; ?>()">
                                <option value="<?php include "index/spec1.php"; ?>">ISBN</option>
                                <option value="<?php include "index/spec2.php"; ?>">EBOOK</option>
                            </select><button style="float: right;">lihat detail</button>
                            <script>
                                function s<?php echo $book['id_books']; ?>() {
                                    var x<?php echo $book['id_books']; ?> = document.getElementById("<?php echo $book['id_books']; ?>").value;
                                    document.getElementById("se<?php echo $book['id_books']; ?>").innerHTML = x<?php echo $book['id_books']; ?>;
                                }
                                s<?php echo $book['id_books']; ?>();

                                var i<?php echo $book['id_books']; ?> = document.getElementById("i<?php echo $book['id_books']; ?>");

                                function cc<?php echo $book['id_books']; ?>() {
                                    if (i<?php echo $book['id_books']; ?>.getAttribute('src') == "image/cover/book.jpg") {
                                        i<?php echo $book['id_books']; ?>.src = "image/cover/book2.jpg";
                                    } else {
                                        i<?php echo $book['id_books']; ?>.src = "image/cover/book.jpg";
                                    }
                                }
                            </script>
                        </td>
                    </tr>
                </table>
            </div>
        <?php } ?>
    </section>
</body>