<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front_Page</title>
    <link rel=" stylesheet" type="text/css" href="file:///C:/Users/Muqadas/Downloads/fontawesome-free-6.4.0-web%20(2)/fontawesome-free-6.4.0-web/css/all.css">
    <style>
        #header{
            width:1275px;
            height:150px;
            background-color:black;
        }
        #Main{
            width:1275px;
            height:450px;
            background-image:url("bj.jpg");
            background-position:center;
            background-size:cover;
            background-image:no-repeat;
            cursor: pointer;
                animation:slider 9s infinite linear; 

        }

        @keyframes slider{
                0%{background-image: url("library1.jpg");}


                35%{background-image: url("library2.jpg");}

                75%{background-image:url("library3.jpg");}

                85%{background-image:url("library4.jpg");}

            }


        #btn{
                background-color:white;
                padding:10px;
                margin-left: 1040px;
                margin-top:-55px;
                display: block;
                color:black;
                border:2px solid black;
                border-radius:5px;
                font-size:18px;
            }
        #btn:hover{
            background-color:rgb(144, 91, 91);
            color:red;
        }
        #btn1{
                background-color:white;
                padding:10px;
                margin-left: 850px;
                margin-top:-45px;
                display: block;
                border:2px solid black;
                border-radius:5px;
                color:black;
                font-size:18px;
            }
        #btn1:hover{
            background-color:rgb(144, 91, 91);
            color:white;
        }

    </style>
</head>
<body>
    <div id="header">
        <img src="book.png" style="margin-left:50px;margin-top:20px">
        <h2 style="color:white;margin-left:230px;margin-top:-70px">Library Managment System</h2>
    
    <button id="btn">
        <a href="http://localhost/Library_System/signup.php"style="color:black;">Student Login</a></button>

     <button id="btn1">
        <a href="http://localhost/Library_System/Admin.php"style="color:black;">Admin Login</a></button>
      
    </div>

    <div id="Main"></div>
    
    <h1 style="color:white;margin-top:-330px;text-align:center;font-size:50px">Welcome To Our Libraray</h1>
    <h4 style="color:white;margin-top:30px;text-align:center;font-size:30px">We Stand Behind Your Success</h4>
  
   
  
    
    
    
    
    
</body>
</html>