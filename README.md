# MemeForum
Our final project in this class.
Lets get that bread!


#place this and lets see what happens

<?php
    $connection = mysqli_connect('localhost', 'crypzzhj', 'D7iqck9yZMdr', 'crypzzhj_userlogin');
    $result = mysqli_query($connection,"SELECT * FROM posts");
    //$uniqueID = hash('crc32', $time);
    while($row = mysqli_fetch_array($result)){
        
        
        $ID = $row['ID'];
        echo "<div class='postThread'>";
        echo "<div class='headPost'>  <h3>".$row['username']."</h3>  <h3>(". $ID.")</h3>  <h3>" .$row['time'] . " CDT</h3> </div> " ;
        echo "<h3>".$row['text_path']. "</h3> </div> <br>";
        getReplies('0', $row['ID']);
        /*if ($row = mysqli_fetch_array($replyResult)){
            $replies = mysqli_fetch_array($replyResult);
            echo $replies['reply'] . " ";
        }*/
        echo "<br>";
    
    }
    
    function getReplies($parent, $uniqueID){
        $connection = mysqli_connect('localhost', 'crypzzhj', 'D7iqck9yZMdr', 'crypzzhj_userlogin');
        $result = mysqli_query($connection,"SELECT * FROM replies WHERE ID = '$uniqueID'");
        echo "Replies:", "<br>";
        while($row = mysqli_fetch_array($result)) {
            
            
            
            echo "<br> <h4> ". $row['username'] ." // ". $row['time'] . "   </h4><br>";
            echo "<h4>" .$row['reply'] .   "</h4>";
        
        }
        
    }
    ?>
