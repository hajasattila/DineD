<?php
require_once('config.php');

if(isset($_POST)){

    $username     = $_POST['username'];
    $email        = $_POST['email'];
    $password     = sha1($_POST['password']);
    $status       = 1;

    $check_username = "SELECT * FROM users WHERE username = '$username'";
    $check_username_query = $db->query($check_username);
    $username_count = $check_username_query->rowCount();

    if($username_count > 0) {
        echo false;
        exit;
    } else {
        $sql = "INSERT INTO users (username, email, password, status) VALUES(?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$username,$email,$password,$status]);

        if($result){
            echo true;
        } else {
            echo false;
        }
    }
}


?>