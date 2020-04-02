<?php

echo "Total Size : ".round(disk_total_space("c:")/1024/1024/1024,2);

echo "<br>";

echo "Free Size : ".round(disk_free_space("c:")/1024/1024/1024,2);

echo "<br>";

echo "Total Used : ".  round(disk_total_space("c:")/1024/1024/1024-disk_free_space("c:")/1024/1024/1024,2)


















?>