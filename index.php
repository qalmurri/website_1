<?php

include 'src/include/header/01.php';
if (!empty($_GET['page'])) {
    include 'web/page/' . $_GET['page'] . '/index.php';
} else {
    include 'src/include/home/01.php';
}
include 'src/include/footer/01.php';
