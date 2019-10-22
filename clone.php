
<?php
class User {
    public $a = 'john';
}
$u = new User();
$clon = clone $u;

echo $u->a;
$clon->a=10;
echo $clon->a;