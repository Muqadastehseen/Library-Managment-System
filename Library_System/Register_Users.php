<?php
if(isset($_POST['save']))

{

  
    if(empty($errors))
    {
       //Step 1:Form connetion//
       $Name=$_POST['name'];
       $Email=$_POST['email'];
       $Password=$_POST['password'];
       
    
      $connection= mysqli_connect("localhost","root","","librarysystem");
     
       //2nd steps: Insert Operation From CRUD
       $query="INSERT INTO 
       users1(Name,Email,Password)
       VALUES('$Name','$Email','$Password')";
 
       $query_result= mysqli_query($connection, $query);
       if($query_result)
       {
          echo "Yes data insertes successfully";
       }
       else{
          echo "Insertion fail";
       }
       
       

 


    }
   

        
    

   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
     <style>
        #content{
            margin-left: 300px;
            margin-top: 50px;
        }
    </style>
   
</head>
<body>

    <div class="container">
        <div class="row" >
            <div class="col-6" id="content">
                <h2 class="text-center">User-Form</h2>
            <form class="border border-dark p-4 bg-light" action="" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" >
                </div>

                <form class="border border-dark p-4 bg-light" action="" method="POST">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <form class="border border-dark p-4 bg-light" action="" method="POST">
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                </div>


                    <div class="form-group">
                        <input type="submit" name="save" class="btn btn-info">
                    </div>



              


    </div>
    
</body>
</html>