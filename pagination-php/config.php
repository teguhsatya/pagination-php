<?php 

$conn = mysqli_connect('localhost', 'root', '', 'pagination_db');
if (!$conn) {
    die('Gagal menghubungkan dengan database').mysqli_connect_error();
}