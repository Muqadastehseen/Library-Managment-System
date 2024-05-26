 <?php
 require('functions.php');
session_start();


 ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                    
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Password Change</a></li>
                </ul>

                <li class="nav-item" style="margin-top: -45px;margin-left:1110px;font-size:80px;"><a class="nav-link" href="ind.php">Log Out</a></li>

 
     </ul>
       
        
            <a class="navbar-brand" style="margin-left: 440px;margin-top: 15px;font-size: 30px;" href="user.php">Libraray Managment System(LMS)</a>
            <h3 style="color:white;margin-top:90px;margin-left: -450px;color:#007bff;">Welcome To Admin Dashboard</h3>
        </div>

       
    
 </div>




<br>

<div class="nav">
    
     <ul>
        
             <li><a href="#">Books</a>

                <ul>
                    <li><a href="Register_Users.php" style="font-size:15px;">Add New Books</a></li>
                    
                </ul>

             </li>
               <li><a href="#">Categories</a>
                <ul>
                    <li><a href="Categories_form.php">Add Categories</a></li>
                    
                </ul>

                  <li><a href="#">Authors</a>
                     <ul>
                    <li><a href="Authors.php">Add New Authors</a></li>
                  
                </ul>
                      <li><a href="#">Issue Books</a>
                         <ul>
                    <li><a href="Issue_Books.php">New Issue Books</a></li>
                  
                </ul>

     </ul>
 </div>




<span><marquee>This is libraray managment system.Libraray system  open at 8:00 am and close at 4:00pm</marquee>
</span><br><br>

   <div class="row">
       <div class="col-md-3">
        <div class="card bg-light" style="width:300px;margin-top:60px;margin-left: 115px;">
            <div class="card-header">Register Users:</div>
            <div class="card-body"><p class="card-text"> No of total users: <?php echo get_user_count();?></p>
                <a href="Show_register.php"class="btn btn-danger" target="_blank">View Registered Userss</a>
            </div>
        </div>
           
       </div>


        <div class="col-md-3">
        <div class="card bg-light" style="width:300px;margin-top:150px;margin-left: 180px;">
            <div class="card-header">Register Books:</div>
            <div class="card-body"><p class="card-text"> No of availble books: <?php  echo get_book_count(); ?></p>
                <a href="Books_showdata.php"class="btn btn-primary" target="_blank">View Registered Books </a>
            </div>
        </div>
           
       </div>

        

        <div class="col-md-3">
        <div class="card bg-light" style="width:300px;margin-top:60px;margin-left:255px;">
            <div class="card-header">Register Categories:</div>
            <div class="card-body"><p class="card-text"> No of  book's Categories: 3</p>
                <a href="Categories_showdata.php"class="btn btn-info" target="_blank">View Categories</a>
            </div>
        </div>
           
       </div>
       <div class="col-md-3">
        <div class="card bg-light" style="width:300px;margin-top:260px;margin-left:-70px;">
            <div class="card-header">Register Authors:</div>
            <div class="card-body"><p class="card-text"> No of availble authors:7</p>
                <a href="Authors_showdata.php"class="btn btn-primary" target="_blank">View Authors</a>
            </div>
        </div>
           
       </div>
       

       <div class="col-md-3">
       <div class="col-md-3">
        <div class="card bg-light" style="width:300px;margin-top:-140px;margin-left: 99px;">
            <div class="card-header">Issued Books:</div>
            <div class="card-body"><p class="card-text"> No of issued books:  <?php echo get_issuebook_count();?></p>
                <a href="issue_show.php"class="btn btn-success" target="_blank">View Issued Books</a>
            </div>
        </div>
           
           
       </div>






   </div>



</body>
</html>