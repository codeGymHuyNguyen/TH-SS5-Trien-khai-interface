<?php
include "ComparableCircle.php";
$circleOne = new ComparableCircle('circleOne', 2);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleThree = new ComparableCircle('circleThree', 2);
$test = $circleOne->compareTo($circleTwo);
echo ('Comparable: <br>');
echo $test;