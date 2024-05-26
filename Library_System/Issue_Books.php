<?php
if(isset($_POST['save']))

{

  
    if(empty($errors))
    {
       //Step 1:Form connetion//
       $Students_Name=$_POST['users1'];
       $Books_Name=$_POST['books1'];
       $ISBN=$_POST['number'];
       
       
    
      $connection= mysqli_connect("localhost","root","","librarysystem");
     
       //2nd steps: Insert Operation From CRUD
       $query="INSERT INTO 
       issuebooks1(Students_Name,Books_Name,ISBN)
       VALUES('$Students_Name','$Books_Name','$ISBN')";
 
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
    <title>Issue_Books Form</title>
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
                <h2 class="text-center">Issue_Books Form</h2>
            <form class="border border-dark p-4 bg-light" action="" method="POST">
            
                <form class="border border-dark p-4 bg-light" action="" method="POST">
                <div class="form-group">
                    <label>ISBN number of Book Title</label>
                    <input type="number" name="number" class="form-control">
                </div>
                <br>
                <label>Students_Name</label>
                    <select name="users1"style="margin-left":5px;>
                    <?php
                    $connection= mysqli_connect("localhost","root","","librarysystem");
                    $query="SELECT Name FROM users1";//sary column ka data lana ho
                    $query_result= mysqli_query($connection, $query);
                    $users_data=mysqli_fetch_all($query_result,MYSQLI_ASSOC);

                    foreach($users_data as $users1)
                    {
                        echo "<option {$users1['Name']}>{$users1['Name']}</option>";
                    }
                  
        
        ?>

      </select>
      <br><br>

      <label>Books_Name</label>
                    <select name="books1"style="margin-left":5px;>
                    <?php
                    $connection= mysqli_connect("localhost","root","","librarysystem");
                    $query="SELECT Books_Name FROM books1";//sary column ka data lana ho
                    $query_result= mysqli_query($connection, $query);
                    $books_data=mysqli_fetch_all($query_result,MYSQLI_ASSOC);

                    foreach($books_data as $books1)
                    {
                        echo "<option {$books1['Books_Name']}>{$books1['Books_Name']}</option>";
                    }
                  
        
        ?>

      </select>
       
                




                <div class="form-group">
                        <input type="submit" name="save" class="btn btn-info">
                    </div>

 
     
</div>

</body>
</html>