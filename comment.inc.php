<?php
function setComments($conn){
    if(isset($_POST['commentSubmit'])){
        $adminid = $_POST['adminid'];
        $date = $_POST['date'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO comment (adminid, date, message) VALUES ('$adminid', '$date', '$comment');";
        $result = $conn->query($sql);
    }
}

function getComments($conn){
    $sql = "SELECT * FROM comment";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['message'];

}