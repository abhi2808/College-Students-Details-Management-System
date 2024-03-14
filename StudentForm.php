<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StudentForm.css">
    <?php
    session_start();
    if(isset($_SESSION['InsertStatus']))
    { echo("
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">");
    }
    ?>
    <title>Student Form</title>
</head>
<body>
   
    <div class="container">
    <?php
    if(isset($_SESSION['InsertStatus']))
    { echo("
        <div class\"hold\" style=\"width=100%;\">
        <div class=\"alert alert-danger\" role=\"alert\">
            Record Not inserted!
          </div>
          </div>"); 
          unset($_SESSION['InsertStatus']); 
    }
    ?>
        <div class="brand-title">Student Details</div>
        <div class="inputs">
        <form action="Info.php" method="post">
            <label for="myRoll">&nbsp;Roll</label>
            <input type="text" placeholder="Enter Roll Number" name="myRoll" id="myRoll" required />
            <label for="myName">&nbsp; Name</label>
            <input type="text" placeholder="Enter Name" name="myName" id="myName" required />
            <label for="myDob">&nbsp; Date of Birth</label>
            <input type="date" placeholder="Date of Birth" name="myDob" id="myDob" required />

            <label for="myCgpa">&nbsp;Cgpa</label>
            <input type="number" placeholder="Enter Cgpa" name="myCgpa" id="myCgpa" max="10.00" required />
            <label for="myMob">&nbsp; Mobile</label>
            <input type="number" placeholder="Enter mobile" name="myMob" id="myMob" max="9999999999" min="1000000000" minlength="10" maxlength="10" required />
            <label for="myEmail">&nbsp; Email</label>
            <input type="email" placeholder="Enter email" name="myEmail" id="myEmail" required />
            <label for="myAbout">&nbsp; About</label>
            <!-- <input type="" placeholder="Enter mobile" name="myMob" id="myMob" max="9999999999" min="1000000000" minlength="10" maxlength="10" required /> -->
            <textarea name="myAbout" id="myAbout" cols="10" rows="2"></textarea>
            <asp:TextBox ID="myAbout" runat="server" TextMode="MultiLine" Rows="8" Columns="50"></asp:TextBox>

        
            <button type="submit">Submit</button>
        </form>
        </div>
        <div>
        <a href="student_table.php">View Database</a>
    </div>
    </div>
    
</body>
</html>