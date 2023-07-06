<?php
$a = "123.abc";
echo "type of a is:".gettype($a);
settype( $a,"int");
echo "After conversion type of a is:".gettype($a);
?>