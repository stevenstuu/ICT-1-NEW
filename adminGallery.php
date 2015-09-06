<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>

<div id="container">
    <a href="home.html"><img src="images/header-logo.png"/></a>
    <img src="images/tstamp.png"/>
    <div id="header">
        <nav>
            <ul>
                <li><a href ="gallery.html">Gallery</a></li>
                <li><a href ="login.html" >Login</a></li>
            </ul>
        </nav>
    </div>
    <br/>
    <?php
    $con=mysql_connect("localhost","root","admin");
    mysql_select_db("brandon",$con);
    $qry="select * from store";
    $result=mysql_query($qry,$con);
    while($row = mysql_fetch_array($result))
    {
        echo '<img height="600" width="800" src="data:image;base64,'.$row[2].' "> ';
        echo '<br/> Image ID:' .$row[0].' ';
        echo '<br/>Image name:'.$row[1].' ';
        echo '<br/>';
    }
    mysql_close($con);

    ?>


    <div class="content">
        <fieldset>
            <legend><h2>Comment</h2> </legend>
            <?php
            //comments here
            ?>
        </fieldset>
    </div>

    <div id="footer">
        <p>2015 BRANDON TENNAKOON ONLINE GALLERY </br> Email: <a>brandon.tennakoon@jcu.edu.au.com</a></p>
    </div>


</body>
</html>
