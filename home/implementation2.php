<?php

$fooBar = 'baz';
$varPrefix = 'foo';

echo "\$fooBar:\t\t\t\t";
echo $fooBar;
echo "\n";

echo "\${\$varPrefix . 'Bar'}:\t\t";
echo ${$varPrefix . 'Bar'};
echo "\n";

?>

