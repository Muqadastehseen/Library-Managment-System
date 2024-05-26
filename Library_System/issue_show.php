<?php
$connection= mysqli_connect("localhost","root","","librarysystem");

//step 2 

$query="SELECT * FROM issuebooks1";//sary column ka data lana ho
$query_result= mysqli_query($connection, $query);//mysqli_query()give schema type info
$data=mysqli_fetch_all($query_result,MYSQLI_ASSOC);//2 value pass ...quesry result//,MYSQLI_ASSOC for associative array.


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show Issue books</title>
</head>
<body>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue_Books</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
     <style>
        #content{
            margin-left: 280px;
            margin-top: 10px;
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
                <a class="nav-link" href="admin_dashboard.php">Admin Dashboard</a>
            </li>

        </ul>

    </div>

</nav> <br>

<span><marquee>This is libraray managment system.Libraray system at 8:00 am and close at 4:00pm</marquee>
</span><br><br>

   
            
            <div  class="col-6" id="content">
                <h2 class="text-center">Issue Books</h2>
                <table class="table table-dark table-striped table-bordered ">
                    

                <tr>
                        
                        <th>Students_Name</th>
                        <th>Books_Name</th>
                        <th>ISBN</th>
                        <th>action</th>
                        <th>action</th>
                        
                
                       
                    </tr>
                    <?php

foreach($data as $row)://row mean ik user ka record fir dosra fir so on.....
?>
                    <tr>
                        
                        <td><?php echo $row['Students_Name']; ?></td>
                        <td><?php echo $row['Books_Name']; ?></td>
                        <td><?php echo $row['ISBN']; ?></td>
                        <td>
       
        
       <td><a href="update_issuebook.php?id=<?php echo $row['ID']; ?>" >Update</a></td>

</td>   
                        
                
                       
                    </tr>
                    
                    <?php

endforeach;

?>
                 
                   
                </table>

            </div>
           
        </div>
    </div>
    
</body>
</html>  
