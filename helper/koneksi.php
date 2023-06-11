<?php

$host = "https://wrart.xcodehoster.com/";
$username = "wrart";
$password = "wrart2023";
$db = "wrart";
error_reporting(0);
$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

$base_url = "https://wrart.xcodehoster.com/";
date_default_timezone_set('Asia/Jakarta');
