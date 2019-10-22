<?php
$myfile = fopen("/home/aspire1593/Desktop/hi.txt", "r+") or die("Unable to open file!");
echo fread($myfile,filesize("/home/aspire1593/Desktop/hi.txt"));
fwrite($myfile, 'The txt you want to write');
fclose($myfile);