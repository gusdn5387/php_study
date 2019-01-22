<?php
preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $matches);
print_r($matches);
$host = $matches[1];
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is: {$matches[0]}\n";
?>