<?php
session_start();
session_destroy();
echo '<script>alert("Session Destroy");window.location="index.php"</script>';
