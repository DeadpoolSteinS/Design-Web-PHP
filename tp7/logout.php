<?php
// https://novaldis.c120.me/tp6-prakdesweb/login.php
require 'conf.php';
require 'includes/Admin.class.php';

$admin = new Admin($db_host, $db_user, $db_pass, $db_name);
$admin->open();

$admin->logout();
