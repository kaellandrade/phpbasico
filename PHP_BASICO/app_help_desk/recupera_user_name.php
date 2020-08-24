<?php
    // recupera o username apartir do email
    $user_name = explode('@', $_SESSION['email']);
    $user_name = $user_name[0];
?>