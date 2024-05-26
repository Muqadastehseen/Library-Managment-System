<?php
if(isset($_POST['save']))

{

  
    if(empty($errors))
    {
       //Step 1:Form connetion//
       $Authors_Name=$_POST['name'];
       $Gender=$_POST['gender'];
    
      $connection= mysqli_connect("localhost","root","","librarysystem");
     
       //2nd steps: Insert Operation From CRUD
       $query="INSERT INTO 
       authors(Authors_Name,Gender)
       VALUES('$Authors_Name','$Gender')";
 
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
    <title>Authors form</title>
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
                <h2 class="text-center">Authors-Form</h2>
            <form class="border border-dark p-4 bg-light" action="" method="POST">
                <div class="form-group">
                    <label> Authors_Name</label>
                    <input type="text" name="name" class="form-control">
                </div>


                <div class="form-group">
                    <label> Select-Gender</label>
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="gender" value="male">Male
                        </label><br><br>    
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="female">Female
                          </label>
                        </div>
                      </div>

       
                    <div class="form-group">
                        <input type="submit" name="save" class="btn btn-info">
                    </div>

                      
                </div>

   
            </form>
            
           
            </div>
           
        </div>
    </div>
    
</body>
</html>