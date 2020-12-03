<?php
$firstname = filter_input(INPUT_POST, 'FirstName');
$lastname = filter_input(INPUT_POST, 'LastName');
$studentid = filter_input(INPUT_POST, 'StudentID');
$position = filter_input(INPUT_POST, 'Position');
if (!empty($firstname)){
if (!empty($lastname)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student athlete health tracker";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO studentathlete (FirstName, LastName, StudentID, Position)
values ('$firstname','$lastname','$studentid','$position')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}

?>