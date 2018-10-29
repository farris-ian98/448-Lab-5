<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "i676f971", "Phohk7ie", "i676f971");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "<table>";
echo "<tr>";
echo "<th> user </th> </tr>";

$users = "SELECT * FROM Users";
if($result = $mysqli->query($users)){
  while($users_row = $result->fetch_assoc()){
    $id = $users_row['id'];
    echo "<tr><td>$id</td></tr>";
  }
}
echo "</table>";
?>
