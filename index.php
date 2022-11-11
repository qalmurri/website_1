<?php

include 'src/include/header/10.php';
if (!empty($_GET['page'])) {
    include 'web/page/' . $_GET['page'] . '/index.php';
} else {
    include 'src/include/home/10.php';
}
include 'src/include/footer/10.php';
