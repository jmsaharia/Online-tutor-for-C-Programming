<?php
require 'adm_core.php';
session_destroy();
//header('Location: '.$http_referer);
//header('Location: '.$current_file);
include "admin_index.php";
?>