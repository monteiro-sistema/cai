<?php
$utf8 = header("Content-Type: text/html; charset=utf8");
$link = new mysqli('localhost', 'root', '', 'db_cai');
$link->set_charset('utf8');
