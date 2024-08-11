<?php
$font_size = '15px';
$background_color = '#4e79a0';

if ($_POST) {
    $background_color = $_POST['background_color'];
    $font_size = $_POST['font_size'];
} else {
    if (isset($_COOKIE['background-color'])) {
        $_POST['background_color'] = $background_color = $_COOKIE['background-color'];
    }
    if (isset($_COOKIE['font-size'])) {
        $_POST['font_size'] = $font_size = $_COOKIE['font-size'];
    }
}

// Delete Cookies
$msg = false;
if (isset($_POST['hapus_cookie'])) {
    setcookie('background-color', '', 0, '/');
    setcookie('font-size', '', 0, '/');
    $msg = 'Data cookie berhasil dihapus';
}

// Set Cookie 7 hari
if (isset($_POST['remember'])) {
    setcookie('background-color', $_POST['background_color'], strtotime('+7 days'), '/');
    setcookie('font-size', $_POST['font_size'], strtotime('+7 days'), '/');
    $msg = 'Data cookie berhasil disimpan';
}
?>