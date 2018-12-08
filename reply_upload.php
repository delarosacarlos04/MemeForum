<?php
$servername="localhost";
$username="crypzzhj";
$password="D7iqck9yZMdr";
$dbname="crypzzhj_userlogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$username=$_COOKIE['username'];
$reply=$_POST["reply"];
echo $reply;
$epoch=time()-21600;
$time=new DateTime("@$epoch");
$formattedTime=$time->format("Y-m-d H:i");
$uniqueID = $_POST['ID'];
if(isset($_POST['Submit'])){
    $query= "INSERT INTO replies(time, username, reply, ID) VALUES ('".$formattedTime."', '".$username."', '".$reply."', '".$uniqueID."')";
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