<?php
        session_start();
if(isset($_POST['save'])){

    $Email=$_POST['email'];
    $Password=$_POST['password'];

    $connection= mysqli_connect("localhost","root","","librarysystem");
  
    $query="SELECT * FROM users1";
    $query_result=mysqli_query($connection,$query);

    while($data=mysqli_fetch_assoc($query_result)){
        if($data['Email']==$_POST['email']){
             if($data['Password']==$_POST['password']){

             }
         }
     }
 }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <link rel=" stylesheet" type="text/css" href="file:///C:/Users/Muqadas/Downloads/fontawesome-free-6.4.0-web%20(2)/fontawesome-free-6.4.0-web/css/all.css"/>

            <style>
                #main_content{
                    background-color:#212529;
                    margin-left: 350px;
                    height:390px;
                    margin-top: 50px;
                }
               

                #btn{
                    background-color: white;
                    color:black;
                    margin-left: 280px;
                }

                 #btn:hover{
                    background-color:black;
                    color:white;
                }

            </style>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid" >
        <div class="navbar-header">
            <a class="navbar-brand" href="user.php">Libraray Managment System(LMS)</a>
        </div>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="Admin.php">Admin Login</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="ind.php">User Login</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="signup.php">Register</a>
            </li>

        </ul>

    </div>

</nav> <br>

<span><marquee>This is libraray managment system.Libraray system at 8:00 am and close at 4:00pm</marquee>
</span><br><br>


    <div class="col-md-6 center" id="main_content">
        <center><h3 style="color: white;">Admin Login Form</h3></center>
        <form action="Update.php"method="POST">

<div class="form-group">
    <label for="Email" style="color:white;">Email:</label>
    <input type="text" class="form-control" placeholder="Enter email" id="email" name="Email" value="<?php echo $Email;?>">
  </div>


  <div class="form-group">
    <label for="pwd" style="color:white;">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="password" name="password" value="<?php echo $Password;?>">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label"style="color:white;">
      <input class="form-check-input"  type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" name="save" class="btn btn-primary" id="btn">Update</button> 


            

</form>
</div>
</div>
</body>

        -->