<?php
$marks = 90;
switch (true) {
    case ($marks >= 90 && $marks <= 100):
        echo "Grade: S";
        break;
    case ($marks >= 80 && $marks < 90):
        echo "Grade: A";
        break;
}
?>