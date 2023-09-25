<?php
// Option 1
$servername = "localhost";
$database = "database";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Load dữ liệu lên website
    echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Id</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
      </tr>';


    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["name"];
        $email = $row["email"];

        echo '<tr> 
                  <td>' . $id . '</td> 
                  <td>' . $name . '</td> 
                  <td>' . $email . '</td> 
              </tr>';
    }
    $result->free();
} else {
    echo "0 results";
}
mysqli_close($conn);

?>