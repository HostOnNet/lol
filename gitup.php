<?php

/*
Web: http://webhostingneeds.com/gitup
*/

$cmd = 'git status';

exec($cmd, $result);

echo '<pre>[root@linux ~]# git status' . "\n";

foreach ($result as $line)
{
    echo $line . "\n";
}

echo '[root@linux ~]#';
echo '<hr>';
echo "\n\n";

unset($result);

$cmd = 'git reset --hard HEAD';
$b = passthru($cmd, $result);

echo "\n\n";

$cmd = 'git pull origin master';
$b = passthru($cmd, $result);

echo "\n\n";
