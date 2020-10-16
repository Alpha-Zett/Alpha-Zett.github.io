<?php
session_start();
$con=@mysqli_connect("localhost","alphabulider_tee","2YPtwMTm5ep7rKbs","alphabulider_tee");
@mysqli_query($con,"set names utf8");
if (!$con) {
    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
    exit;
}
