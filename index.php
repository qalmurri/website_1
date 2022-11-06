<?php
session_start();

include 'web/header.php';
if (!empty($_GET['page'])) {
    include 'web/page/' . $_GET['page'] . '/index.php';
} else {
    include 'web/home.php';
}
include 'web/footer.php';
