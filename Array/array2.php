<?php
    // $grades = array('member1'=>100, 'member2'=>90, 'member3'=>80);
    $grades = [];
    $grades['member1'] = 100;
    $grades['member2'] = 90;
    $grades['member3'] = 80;
    // var_dump($grades);
    // echo $grades['member1'];
    foreach($grades as $key => $value) {
        echo "key: {$key} value: {$value}<br/>";
    }
?>