<?php

function get_user_count()
{
    $connection= mysqli_connect("localhost","root","","librarysystem");
    $user_count="";
  
    $query="SELECT count(*) as user_count from users1";
    $query_result=mysqli_query($connection,$query);

    while($data=mysqli_fetch_assoc($query_result)){
    	$user_count=$data['user_count'];
    }
    return($user_count);
}

function get_issuebook_count()
{
    $connection= mysqli_connect("localhost","root","","librarysystem");
    $issuebook_count="";
  
    $query="SELECT count(*) as issuebook_count from issuebooks1";
    $query_result=mysqli_query($connection,$query);

    while($data=mysqli_fetch_assoc($query_result)){
    	$issuebook_count=$data['issuebook_count'];
    }
    return($issuebook_count);
}




function get_book_count()
{
    $connection= mysqli_connect("localhost","root","","librarysystem");
    $book_count="";
  
    $query="SELECT count(*) as book_count from books1";
    $query_result=mysqli_query($connection,$query);

    while($data=mysqli_fetch_assoc($query_result)){
    	$book_count=$data['book_count'];
    }
    return($book_count);
}





?>