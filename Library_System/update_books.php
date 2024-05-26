<?php

if(isset($_GET['id']))

{

   $id=$_GET['id'];
   //echo $id;


   $connection= mysqli_connect("localhost","root","","librarysystem");
   $query="SELECT * FROM books1 WHERE id='$id'";//sary column ka data lana ho
   $query_result= mysqli_query($connection, $query);//mysqli_query()give schema type info
   $data=mysqli_fetch_assoc($query_result);//2 value pass ...quesry result//,MYSQLI_ASSOC for associative array.
   

    //////////////////////////When user fills all the form field correctly

    if(isset($_POST['save']))//Agr koi error ni hy uper, tub yh condition run ho g otherwise agr ik bhi error a gya tu yh condition ni chaly g data database ky ander store ni ho g
    {
       //Step 1:Form connetion//
       $ID=$_POST['ID'];
       $Books_Name=$_POST['name'];
       $Books_Number=$_POST['number'];
       $Books_Price=$_POST['number'];
       $Authors_Name=$_POST['authors'];
       $query="UPDATE books1 SET Books_Name='$Books_Name',Books_Number='$Books_Number',Books_Price='$Books_Price',Author_Name='$Authors_Name'  WHERE ID = '$ID'";
       $s=mysqli_query($connection,$query);
     
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Submission</title>
        <style>
              #Main{
                     background-color:pink;
                     width:1393px;
                     height:630px;

              }
            #Main3{
                width:450px;
                height:450px;
                background-color:white;
                margin-top:-500px;
                margin-left:530px;
                
            }
            #btn{
              background-color:pink;
              text:bold;
              font-size:15px;
            }
            #btn:hover{
              background-color:white;
            }
            
            #Main2{
            width:1050px;
            height:550px;
            background-color:white;
            margin-top:-590px;
            margin-left:170px;
            }
            #Main4{
               background-image:url("book.jpg");
               background-size:cover;
               background-position:center;
               background image:no repeat;
                width:500px;
                height:450px;
                background-color:hsl(0, 0%, 90%);
                margin-top:-530px;
                margin-left:230px;
                
            }



        </style>
    </head>
    <body>
    <body>
       <div id="Main"></div>
       <div id="Main2"></div>
       <div id="Main4">
       <form action="" method="POST">

       <div id="Main3">
              <h2 style="text-align:center;color:rgb(255, 116, 139);">Sign Up</h2>
              <h3 style="text-align:center;color:rgb(255, 116, 139);">Let's create your account</h3>
        
        <div class="field-box">
       
       <input value="<?php echo $data['ID'];  ?>" type="text" name="ID" placeholder="Enter your ID" style="margin-left:150px;background-color:rgb(227, 207, 156);">
</div>

       <br>


       <div class="field-box">
       
       <input value="<?php echo $data['Books_Name'];  ?>" type="text" name="name" placeholder="Enter books Name" style="margin-left:150px;margin-top:20px;background-color:rgb(227, 207, 156);border-color:black;">
</div>

       <br>

       <div class="field-box">

       
       <input value="<?php echo $data['Books_Number'];  ?>" type="number" name="number" placeholder="Enter books number" style="margin-left:150px;margin-top:20px;background-color:rgb(227, 207, 156);">
</div>
<br>

       
       <div class="field-box">

       
       <input value="<?php echo $data['Books_Price'];  ?>" type="number" name="number" placeholder="Enter Books Price" style="margin-left:150px;margin-top:20px;background-color:rgb(227, 207, 156);">
</div>

<br>

<div class="field-box" style="width:120px;">



                    <select name="authors" style="margin-left:150px;width:170px;background-color:rgb(227, 207, 156);">
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
       

        </div>




       <button type="submit" name="save" id="btn" style="margin-left:190px;margin-top:30px;width:90px;height:40px;border-radius:10px">Update</button>


    </form>
        </div>
</body>
</html>
