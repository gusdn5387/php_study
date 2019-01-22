<?php
session_start();
$id = 'admin';
$pwd = '1234';
if(!empty($_POST['id'] && !empty($_POST['pwd']))) {
    if($_POST['id'] == $id && $_POST['pwd'] == $pwd) {
        $_SESSION['is_login'] = true;
        $_SESSION['nickname'] = '운영자';
        header('Location: ./login_after.php');
        exit;
    }
}
echo '아이디나 비밀번호가 틀렸습니다.';
?>