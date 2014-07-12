<?php
$link = mysqli_connect('localhost','root','','mysql') or die("Error " . mysqli_error($link));
echo "<p>MySQL check successful!</p><hr>\n";
phpinfo();
