<?php
function get_cookies($name_field): string {
        if (isset($_COOKIE[$name_field])) {
            return 'value="' . $_COOKIE[$name_field] . '"';
        }
    return '';
}

function get_errors() {
    if (isset($_SESSION['errors'])) {
        return $_SESSION['errors'];
    }
    return '';
}

function clear_cookies() {
    setcookie('name_user', '', time() -1 );
    setcookie('login_user', '', time() - 1);
}