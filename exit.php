<?php
session_start();
session_destroy();
include_once ('function.php');
clear_cookies();
header( 'Location: index.php');
