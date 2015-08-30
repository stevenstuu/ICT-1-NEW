<?php

//connect to db
mysql_connect("localhost","root","admin") or die(mysql_error());
mysql_select_db("brandon");

//file properties
echo $file = $_FILES['image']['tmp_name'];



/**
 * Created by PhpStorm.
 * User: stevenstuu
 * Date: 8/30/2015
 * Time: 6:56 PM
 */
?>