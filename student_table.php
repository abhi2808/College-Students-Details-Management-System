<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>
<?php

// Create connection
$con = mysqli_connect('localhost:3306', 'root', '','wt_project');


// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM `student`;";
$result = $con->query($sql);

echo("
<button type=\"button\" class=\"btn btn-outline-dark\"><a href=\"StudentForm.php\">Back</a></button>
<table class= \"table table-hover\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">Roll</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">DOB</th>
      <th scope=\"col\">Cgpa</th>
      <th scope=\"col\">Mobile</th>
      <th scope=\"col\">Email</th>
      <th scope=\"col\">About</th>
    </tr>
  </thead>
  <tbody>");

  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo("
    <tr>
      <td>" . $row["Roll"]. "</td>
      <td>" . $row["Name"]. "</td>
      <td>" . $row["Dob"]. "</td>
      <td>" . $row["Cgpa"]. "</td>
      <td>" . $row["Mobile"]. "</td>
      <td>" . $row["Email"]. "</td>
      <td>" . $row["About"]. "</td>
    </tr>");
  }
}
  echo("
  </tbody>
</table>
");

$con->close();
?>

</body>
</html>