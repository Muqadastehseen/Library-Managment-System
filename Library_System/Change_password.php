


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up_Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
			<link rel=" stylesheet" type="text/css" href="file:///C:/Users/Muqadas/Downloads/fontawesome-free-6.4.0-web%20(2)/fontawesome-free-6.4.0-web/css/all.css"/>

             <style>
                #main_content{
                    background-color:#212529;
                    margin-left: 350px;
                    height:380px;
                    margin-top: 10px;
                }
                #side-bar{
                    background-color:whitesmoke;
                    color:white;
                    padding: 50px;
                    width:300%;
                   height:350px;
                   color:black;
                   margin-left: 60px;
                   margin-top: 15px;

                }

                #btn{
                    background-color: white;
                    color:black;
                    margin-left: 280px;
                    marrgin-top:-30px;
                }

                 #btn:hover{
                    background-color:black;
                    color:white;
                }

            </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="ind.php">Libraray Managment System(LMS)</a>
        </div>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="Admin.php">Admin Login</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="ind.php">User Login</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="user.php">Register</a>
            </li>

        </ul>

    </div>

</nav> <br>
<span><marquee>This is libraray managment system.Libraray system at 8:00 am and close at 4:00pm</marquee>
</span><br><br>






    <div class="col-md-6 center" id="main_content">
        <center><h3 style="color: white;">User Registration Form</h3></center>
        <form action=""method="POST">

             <div class="form-group">
    <label for="name" style="color:white;">ID:</label>
    <input type="name" class="form-control" placeholder="Enter your id" id="id" name="id">
  </div>


            <div class="form-group">
    <label for="password" style="color:white;">New_Password</label>
    <input type="password" class="form-control" placeholder="Enter new password" id="password" name="password">
  </div>
  
  <button type="submit" name="save"  value="change password "class="btn btn-primary" id="btn">Submit</button>
</form>
            
        </form>
    
</div>
<?php
if($_POST['submit'])
{
    $ID=$_POST['id'];
    $Newpass=$_POST['password'];
    $query="UPDATE users1 set Password='$Password' WHERE id='$ID'";
    $query_result= mysqli_query($connection, $query);
    if($query_result)
    {
        echo "successful";
    }
    else{
        echo "updation failed";
    }
}



?>
    


</body>
</html>