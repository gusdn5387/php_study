<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $uploaddir = 'C:\Bitnami\wampstack-7.1.26-0\apache2\htdocs\upload\file\\';
        $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
        echo "<pre>";
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo "파일 업로드 성공.\n";
        } else {
            print "파일 업로드 공격의 가능성이 있습니다.\n";
        }

        echo "자세한 디버깅 정보입니다.";
        print_r($_FILES);
        print "</pre>";
    ?>
    <img src='file/<?=$_FILES['userfile']['name']?>'/>
</body>
</html>