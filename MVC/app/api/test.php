<?php

$x = shell_exec('python ./main.py 5 2>&1');
echo $x;
?>