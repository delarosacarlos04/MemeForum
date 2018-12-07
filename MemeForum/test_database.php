


<?php
$connection = mysqli_connect('localhost', 'root', "", 'crypzzhj_userlogin');
$replyResult = mysqli_query($connection,"SELECT * FROM replies");
$result = mysqli_query($connection,"SELECT * FROM posts");
while($row = mysqli_fetch_array($result)){
    echo "Time Posted: " ,$row['time'] . "<br>";
    echo "Username: " ,$row['username'] . "<br>";
    echo "Post: " ,$row['text_path'] . "<br>";
    getReplies('0', $row['reply']);
/*    if ($row = mysqli_fetch_array($replyResult)){
        $replies = mysqli_fetch_array($replyResult);
        echo $replies['reply'] . " ";
    }*/
    echo "<br>";

}

function getReplies($parent, $ID){
    $connection = mysqli_connect('localhost', 'root', "", 'crypzzhj_userlogin');
    $result = mysqli_query($connection,"SELECT * FROM replies WHERE ID = '$ID'");
    echo "Replies:", "<br>";
    while($row = mysqli_fetch_array($result)) {
        echo $row['reply'] . "<br>";
    }
}
?>
