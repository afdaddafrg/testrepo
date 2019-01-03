<?php
echo "newest";
$dir    = '/tmp';
$files1 = scandir($dir);

unlink('index.js');

$files2 = scandir(getcwd());

print_r($files1);
print_r($files2);

?>
