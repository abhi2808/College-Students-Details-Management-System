
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .container{
        width: 100%;
        height: 100%;
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 350px;
      margin: auto;
      margin-top: 25%;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: auto;
      text-align: center; 
      position:relative;
      width: 350px;
      border-radius: 20px;
    }
    .wide{
        min-height: 100%;
        position: relative;

      }
    </style>
    </head>

    <body style="display: flex; justify-content: center; align-items: center; background-image:url('KIIT-Photo1.jpeg')">
    <div class="wide">
    <div class="card rounded20">
    <?php

// Create connection
$con = mysqli_connect('localhost:3306', 'root', '','wt_project');

$uRoll = $_GET['uRoll'];
$uDob = $_GET['uDob'];
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM `student`;";
$result = $con->query($sql);

$flag = '0';

if ($result->num_rows > 0) {
    //echo "<table border=1><tr><th>Name</th><th>Email</th><th>Phone</th><th>Message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. " </td><td>" . $row["phone"]. "</td><td>" . $row["message"]. "</td></tr>";
        if($row["Roll"] == $uRoll && $row["Dob"] == $uDob)
        {
            $flag = '1';
            break;
        }
    }
}


if($flag == '1')
{
    $det = "SELECT * FROM `student` WHERE Roll=" .$uRoll.";";
    $data = $con->query($det)
    or die($con->error);
    $row2= $data->fetch_assoc();
    echo("
        <table class=\"table table-hover table-bordered\">
            <tr class=\"rounded-pill\">
                <th colspan=\"2\"><center>" . $row["Name"]. "</center></th>
            </tr>
            <tr>
                <th>Roll:</th>
                <td>" . $row["Roll"]. "</td>
            </tr>
            <tr>
                <th>DOB:</th>
                <td>" . $row["Dob"]. "</td>
            </tr>
            <tr>
                <th>Cgpa:</th>
                <td>" .$row["Cgpa"]. "</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>" . $row["Email"]. "</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>" .$row["Mobile"]. "</td>
            </tr>
            <tr>
                <td colspan=\"2\">" . $row["About"]. "</td>
            </tr>
          </table>
          <button type=\"button\" class=\"btn btn-outline-info rounded-pill\"><a href=\"Login3.html\">Back</a></button>    
    </div> 
    </div>
    </body>
    </html>
");
}
else
{
    include 'NotStudent.html';
}

$con->close();
?>
