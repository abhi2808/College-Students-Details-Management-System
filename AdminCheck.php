<html>
<body>

<?php

// Create connection
$con = mysqli_connect('localhost:3306', 'root', '','wt_project');

$uname = $_GET['uname'];
$upass = $_GET['upass'];
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM `Admin`;";
$result = $con->query($sql);

$flag = '0';

if ($result->num_rows > 0) {
    //echo "<table border=1><tr><th>Name</th><th>Email</th><th>Phone</th><th>Message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. " </td><td>" . $row["phone"]. "</td><td>" . $row["message"]. "</td></tr>";
        if($row["Username"] == $uname && $row["Password"] == $upass)
        {
            $flag = '1';
            break;
        }
    }
}
if($flag == '1')
{
    include 'StudentForm.php';
}
else
{
    include 'Admin.html';
}

$con->close();
?>

</body>
</html>