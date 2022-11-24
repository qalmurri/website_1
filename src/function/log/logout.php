<?php
$id_member = $_SESSION['id_member'];
$token_login = $_SESSION['token_login'];

$log = "INSERT into com_log.log (id_member, id_crud, id_action, note_log)
VALUES ($id_member, 1, 3, $token_login)";
$query_log = $dbuser->prepare($log);
$query_log->execute();
