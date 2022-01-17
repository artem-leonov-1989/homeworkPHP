<?php
session_start();
if (isset($_SESSION['id_user'])) {
    echo 'Здравствуйте, '.$_SESSION['name_user'].'!<br>';
    echo '<a href="exit.php">Выход</a>';
} else {
    header( 'Location: index.php');
}
