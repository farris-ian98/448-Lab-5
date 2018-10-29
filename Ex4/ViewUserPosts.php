<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "i676f971", "Phohk7ie", "i676f971");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST["user"];
echo "<table>";
echo "<tr>";
echo "<th> posts </th> </tr>";

$posts = "SELECT * FROM posts WHERE author_id = '$username'";
if($result = $mysqli->query($posts)){
  while($posts_row = $result->fetch_assoc()){
    $post_id = $posts_row['post_id'];
    $content = $posts_row['content'];
    $author_id = $posts_row['author_id'];
    echo "<tr>
    <td>$post_id</td>
    <td>$content</td>
    <td>$author_id</td>
    </tr>";
  }
}
echo "</table>";

?>
