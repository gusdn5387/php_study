<?php
    // require_once 'greeting.php';
    function autoloader($path) {
        $path = str_replace('\\','/',$path);
        $path = $path.'.php';
        var_dump("path : {$path}");
        require_once $path;
    }
    spl_autoload_register('autoloader');
    // new Bye();
    use \hi\en\Hi as HiEn;
    use \hi\ko\Hi as HiKo;
    new HiEn();
    new HiKo();
?>