<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <link rel=" stylesheet" type="text/css" href="file:///C:/Users/Muqadas/Downloads/fontawesome-free-6.4.0-web%20(2)/fontawesome-free-6.4.0-web/css/all.css"/>
            <style>
                body{
                    margin: 0;
                    background-color: red;

                }
                .nav{
                    width:100%;
                    background-color: black;
                    height:80px;
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
                    font-size: 20px;
                    text-align: center;
                    padding: 10px;
                    border-radius: 10px;
                    font-family: Century Gothic;
                    font-weight:bold;
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
 <div class="nav">
     <ul>
         <li><a href="#">Home</a></li>
          <li><a href="#">News</a></li>
           <li><a href="#">Block</a></li>
            <li><a href="#">Feedback</a></li>
             <li><a href="#">More</a>
                <ul>
                    <li><a href="#">More 1</a></li>
                    <li><a href="#">More 2</a></li>
                    <li><a href="#">More 3</a></li>
                    <li><a href="#">More 4</a></li>
                </ul>

             </li>
     </ul>
 </div>
    </body>
    </html>