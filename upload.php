<?php

//file properties
if(isset($_POST['submit']))
{

    if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
    {
        echo "Please select an image";
    }
    else
    {
        $image = addslashes($_FILES['image']['tmp_name']);
        $name = addslashes($_FILES['image']['name']);
        $image = file_get_contents($image);
        $image = base64_encode($image);
        saveimage($name,$image);
    }
}
//displayimage();
function saveimage($name,$image){
        $con=mysql_connect("localhost","root","admin");
        mysql_select_db("brandon",$con);
        $qry = "insert into store(name,image) values('$name','$image')";
        $result = mysql_query($qry,$con);
        if($result){
            echo "<br/> Image uploaded";
            header('refresh: 5; Location: adminGallery.php');
        }else{
            echo "<br/> Image not uploaded";
            header('refresh: 5; Location: adminHome.html');
        }
    }
//display image
/**
function displayimage()
{
    $con=mysql_connect("localhost","root","admin");
    mysql_select_db("brandon",$con);
    $qry="select * from store";
    $result=mysql_query($qry,$con);
    while($row = mysql_fetch_array($result))
    {
        echo '<img height="300" width="300" src="data:image;base64,'.$row[2].' "> ';
    }
    mysql_close($con);
}




/**
 * Created by PhpStorm.
 * User: stevenstuu
 * Date: 8/30/2015
 * Time: 6:56 PM
 */
?>