<?php
if(isset($_POST['save']))

{

  
    if(empty($errors))
    {
       //Step 1:Form connetion//
       $Email=$_POST['email'];
       $Password=$_POST['password'];
       
    
      $connection= mysqli_connect("localhost","root","","librarysystem");
     
       //2nd steps: Insert Operation From CRUD
       $query="INSERT INTO 
       admin(Email,Password)
       VALUES('$Email','$Password')";
 
       $query_result= mysqli_query($connection, $query);
       if($query_result)
       {
          echo "Yes data insertes successfully";
       }
       else{
         echo "Error here";
       }
   }
}
?>


 


    }
    
   

        
    

   
}
 
?>