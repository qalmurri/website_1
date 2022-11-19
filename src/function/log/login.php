<?php
$log = "INSERT into com_log.log (id_member, id_crud, id_action)
VALUES ($id_member, 1, 2) ";
$query_log = $dbuser->prepare($log);
$query_log->execute();
