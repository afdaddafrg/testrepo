<?php
echo "new";
$dir    = '/tmp';
$files1 = scandir($dir);

$files2 = scandir(getcwd());

print_r($files1);
print_r($files2);

?>
