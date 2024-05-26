<?php
if(isset($_POST['save']))

{

       //Step 1:Form connetion//
      
       $Categories_Name=$_POST['name'];
      
    
      $connection= mysqli_connect("localhost","root","","librarysystem");
     
       //2nd steps: Insert Operation From CRUD
       $query="INSERT INTO 
       categories (Categories_Name)
       VALUES('$Categories_Name')";
 
       $query_result= mysqli_query($connection, $query);
       if($query_result)
       {
          echo "Yes data insertes successfully";
       }
       else{
          echo "Insertion fail";
       }
       
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories_Name</title>
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
        <div class="row">
            <div class="col-6" id="content">
                <h3 style=text-align:center;margin-top:20px;>Categories_Name</h3>
               
            <form class="border border-dark p-4 bg-light" action="" method="POST">
                <div class="form-group">
                    <label>Categories_Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

               
                    <div class="form-group">
                        <input type="submit" name="save" class="btn btn-info">
                    </div>

                      
                </div>

   
            </form>
            
            
    </div>
    
</body>
</html>