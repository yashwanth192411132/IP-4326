<?php
  $a=simplexml_load_file("activity.xml");
foreach($a->students as $b)
    {
        echo "Regno:".$b->regno."<br>";
        echo "Name:".$b->name."<br>";
        echo "Dept:".$b->dep."<br>";
    }
    ?>