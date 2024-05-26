 <?php
 require('functions.php');
session_start();


 ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <link rel=" stylesheet" type="text/css" href="file:///C:/Users/Muqadas/Downloads/fontawesome-free-6.4.0-web%20(2)/fontawesome-free-6.4.0-web/css/all.css"/>

    <style>
               
                .nav{
                    width:100%;
                    background-color: black;
                    height:80px;
                    margin-top: -10px;
                }
                ul{
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    position: absolute;

                }
                ul li{
                    float: left;
                    margin-top: 20px;

                }
                ul li a{
                    width: 150px;
                    color:white;
                    display:block;
                    text-decoration: none;
                    font-size: 15px;
                    text-align: center;
                    padding: 10px;
                    font-family: Century Gothic;
                    border-radius: 10px;
                   
                }

                a:hover{
                    background-color: hotpink;
                }
                ul li ul {
                    background-color:#000333;
                }
                ul li ul li {
                    float:none;

                }

                ul li ul{
                    display: none;
                }
                ul li:hover ul{
                    display: block;

                }

               
            </style>         
            

</head>
<body>

    <div class="nav" style="height:150px;background-color: bg-dark;">

          <ul>
       <li><a href="#" style="margin-left:1000px;font-size: 20px;">My Profile</a>

                <ul style="margin-left: 1000px;">

                    
                    <li><a href="#">Password Change</a></li>
                </ul>

                <li class="nav-item" style="margin-top: -45px;margin-left:1120px;font-size:80px;"><a class="nav-link" href="ind.php">Log Out</a></li>

 
     </ul>
       
        
            <a class="navbar-brand" style="margin-left: 490px;margin-top: 15px;font-size: 30px;" href="user.php">Libraray Managment System(LMS)</a>
            <h3 style="color:white;margin-top:90px;margin-left: -440px;color:#007bff;">Welcome To Users Dashboard</h3>
        </div>

       
    
 </div>




<br>

<div class="nav">
    
     <ul>
        
             <li><a href="#">Password</a>

                <ul>
                    <li><a href="Change_password.php" style="font-size:15px;">Change Password</a></li>
                    
                </ul>

             </li>
               
                      <li><a href="#">Issue Books</a>
                         <ul>
                    <li><a href="issue_show.php">Manage Issue_Books</a></li>
                   
                </ul>

     </ul>
 </div>




<span><marquee>This is libraray managment system.Libraray system  open at 8:00 am and close at 4:00pm</marquee>
</span><br><br>


<div class="row">
     

       <div class="col-md-3">
        <div class="card bg-light" style="width:300px;margin-top:10px;margin-left: 532px;">
            <div class="card-header">Issued Books:</div>
            <div class="card-body"><p class="card-text"> No of issued books:  <?php echo get_issuebook_count();?></p>
                <a href="issue_show.php"class="btn btn-success" target="_blank">View Issued Books</a>
            </div>
        </div>
           
       </div>






   </div>



   


</body>
</html>