<?php
$servername="localhost";
$serverUsername="crypzzhj";
$password="D7iqck9yZMdr";
$dbname="crypzzhj_userlogin";
$conn = mysqli_connect($servername, $serverUsername, $password, $dbname);
$text=$_POST['text_path'];
$username=$_COOKIE['username'];
$epoch=time()-21600;
$time=new DateTime("@$epoch");
$formattedTime=$time->format("Y-m-d H:i");
$uniqueID = hash('crc32', $epoch);
if(isset($_POST['Submit'])){
    $query= "INSERT INTO posts(time, username, text_path, ID) VALUES ('".$formattedTime."', '".$username."', '".$text."', '".$uniqueID."')";
    mysqli_query($query,$conn);
    if($conn->query($query)===TRUE){
        echo "yay";
    }else{
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    header("Location:/Meme_Forum");
    //exit();
}
if ($text === ''){
    header("Location:/Meme_Forum/test.html");
}
?>