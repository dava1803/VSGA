<?php
    session_start();
    session_destroy();
    header("Location: LoginForm.html");
    die();
?>