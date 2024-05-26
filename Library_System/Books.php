<?php
if(isset($_POST['save']))

{

  
    if(empty($errors))
    {
       //Step 1:Form connetion//
       $Books_Name=$_POST['name'];
       $Books_Number=$_POST['number'];
       $Books_Price=$_POST['number'];
       $Categories_Name=$_POST['categories'];
       $Authors_Name=$_POST['authors'];
       
    
      $connection= mysqli_connect("localhost","root","","librarysystem");
     
       //2nd steps: Insert Operation From CRUD
       $query="INSERT INTO 
       books1(Books_Name,Books_Number,Books_Price,Categories_Name,Author_Name)
       VALUES('$Books_Name','$Books_Number','$Books_Price','$Categories_Name','$Authors_Name')";
 
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
    <title>Books Form</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
   
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="text-center">Books-Form</h2>
            <form class="border border-dark p-4 bg-light" action="" method="POST">
                <div class="form-group">
                    <label>Books_Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <form class="border border-dark p-4 bg-light" action="" method="POST">
                <div class="form-group">
                    <label>Books_Number</label>
                    <input type="number" name="number" class="form-control">
                </div>

                <form class="border border-dark p-4 bg-light" action="" method="POST">
                <div class="form-group">
                    <label>Books_Price</label>
                    <input type="float" name="number" class="form-control">
                </div>


              

<form class="border border-dark p-4 bg-light" action="" method="POST">
                <div class="form-group">
                    <label>Select Categories</label>
                    <select name="categories"style="margin-left":5px;>
                    <?php
                    $connection= mysqli_connect("localhost","root","","librarysystem");
                    $query="SELECT Categories_Name FROM categories";//sary column ka data lana ho
                    $query_result= mysqli_query($connection, $query);
                    $categories_data=mysqli_fetch_all($query_result,MYSQLI_ASSOC);

                    foreach($categories_data as $categories)
                    {
                        echo "<option {$categories['Categories_Name']}>{$categories['Categories_Name']}</option>";
                    }
                  
        
        ?>

      </select>
     
</div>



<form class="border border-dark p-4 bg-light" action="" method="POST">
<label>Select Authors</label>
                    <select name="authors"style="margin-left":5px;>
                    <?php
                    $connection= mysqli_connect("localhost","root","","librarysystem");
                    $query="SELECT Authors_Name FROM authors";//sary column ka data lana ho
                    $query_result= mysqli_query($connection, $query);
                    $authors_data=mysqli_fetch_all($query_result,MYSQLI_ASSOC);

                    foreach($authors_data as $authors)
                    {
                        echo "<option {$authors['Authors_Name']}>{$authors['Authors_Name']}</option>";
                    }
                  
        
        ?>

      </select>
       
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