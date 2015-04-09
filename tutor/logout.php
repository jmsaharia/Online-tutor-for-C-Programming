<?php
require 'core.php';
session_destroy();
//header('Location: '.$http_referer);
//header('Location: '.$current_file);
include "index.php";
?>