
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "i676f971", "Phohk7ie", "i676f971");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$username = $_POST["userId"];
$query = "SELECT * FROM Users WHERE id = '$username';";
$result = $mysqli->query($query);

if ($row = $result->fetch_assoc()) {
  echo "Username already exists";
}
else{
  $add_user = "INSERT INTO Users (id) VALUES ('$username');";
  if ($username == ''){
    echo "Error: cannot have blank username";
  }
  else if($mysqli->query($add_user)){
    echo "New user created.";
  }
  else{
    echo "Error: " . $mysqli->error;
  }
}
$mysqli->close();
?>
