<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "i676f971", "Phohk7ie", "i676f971");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$username = $_POST["userId"];
$post = $_POST["message"];

$query = "SELECT * FROM Users WHERE id = '$username';";
$result = $mysqli->query($query);
$count = mysqli_num_rows($result);

if($count == 0){
  echo "Not a valid username";

}
else{
    $add_post = "INSERT INTO posts (content, author_id) VALUES ('$post','$username');";
    if ($post == ''){
      echo "please input a valid post.";

    }
    else if($mysqli->query($add_post)){
      echo "New post created.";
    }
    else{
      echo "Error: " . $mysqli->error;
    }
}

$mysqli->close();
?>
