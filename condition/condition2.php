<?php
if($_GET['id'] === 'admin') {
    echo 'Hello, Admin';
} else {
    echo 'Hello, '.$_GET['id'];
}
?>