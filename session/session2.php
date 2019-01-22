<?php
    session_start();
    echo $_SESSION['title'];
    echo " ".file_get_contents('./session/sess_'.session_id());
?>