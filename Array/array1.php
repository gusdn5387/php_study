<?php
    // $member = array('member1','member2','member3');
    function get_members(){
        return ['member1', 'member2', 'member3'];
    }
    
    $members = get_members();
    // array_push($members, 'member4');
    // $members = array_merge($members, ['member5','member6']);
    // array_unshift($members,'admin');
    // array_splice($members, 2, 0, 'Member2');
    // array_shift($members);
    // array_pop($members);
    // sort($members);
    // rsort($members);
    
    for($i = 0; $i < count($members); $i++){
        echo ucfirst($members[$i]).'<br />';
    }
?>