<?php
mysql_connect("localhost", "crypzzhj", "D7iqck9yZMdr") or
    die("Could not connect: " . mysql_error());
mysql_select_db("crypzzhj_userlogin");

$result = mysql_query("SELECT * FROM posts");
while($row = mysql_fetch_array($result)){
    echo $row['time'] . " ";
    echo $row['username'] . " ";
    echo $row['text_path'];
    echo "<br>";
}
?>
