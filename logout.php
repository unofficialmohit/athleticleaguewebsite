<?php
session_start();
session_destroy();
echo("<script LANGUAGE='JAVASCRIPT'>
    window.location = 'index.php';
</script>");
?>