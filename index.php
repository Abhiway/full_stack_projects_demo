<?php
$a=$_POST['name'];
$b=$_POST['branch'];
$c=$_POST['college'];
$d=$_POST['mobileno'];
$e=$_POST['email-1'];
if(empty($a) or empty($b) or empty($c) or empty($d) or empty($e)) 
{
    echo "<h1>Please Enter the fileds First</h1>";
      echo "<h2><a href='index.html'>go back</a></h2>";
}
else
{
    $host="localhost";
    $username="root";
    $password="abbu008008";
    $db="student_info";
    $con=new mysqli($host,$username,$password,$db);
//     if($con->connect_error)
//     {
//         echo"<h2>Database is Not Connected</h2> ".$con->connect_error;
//         echo "</br>";
//     }
//     else
//     {
//     echo "</h2> Database is Connected </h2>";
//     echo "</br>";
//    } 
   
//    $sql="CREATE DATABASE student_info";
//    $db_created=$con->query($sql);

//    if($db_created===TRUE)
//    {
//        echo "database created";
//    }
//    else
//    {
//        echo "database not created".$con->error;
//        echo "</br>";
//    }

$sql_2="USE student_info ";
$run_sql_2=$con->query($sql_2);

// if($run_sql_2===TRUE)
// {
//     echo "using datbase";
//     echo "</br>";
// }
// else
// {
//     echo "not using database".$con->error;
//     echo "</br>";
// }


//    $insert_query="CREATE TABLE student 
//                 ( std_id INT  UNIQUE ,
//                     name CHAR(20) NOT NULL,
//                  branch CHAR(30) NOT NULL,
//                  college  CHAR(40) NOT NULL,
//                  mobileno BIGINT  UNIQUE ,
//                  email VARCHAR(50) UNIQUE )";
             

// $insert_query_run_1=$con->query($insert_query);

// if($insert_query_run_1===TRUE)
// {
//     echo "table creataed";  
//       echo "</br>";
// }
// else
// {
//     echo "tabale not created".$con->error;  
//       echo "</br>";
// }
$sql_3="INSERT INTO student 
        (name, branch,college,mobileno,email) VALUES('$a','$b','$c','$d','$e'); " ;
$run_sql_3=$con->query($sql_3);
//    if($run_sql_3===TRUE)
// {
//     echo "inserted brooooooo";  
//       echo "</br>";
// }
// else
// {
//     echo "not inserted broooooooo"."</br>".$con->error;  
//       echo "</br>";
// }    
echo "<h2> Thanks Your For Signup:</h2>"."<h2>$a</h2>". "<h3>from</h3> " ."<h2>$c</h2>";
// echo "<img src="https:i2.wp.com/www.brandsparkleads.com/wp-content/uploads/2021/04/QuaintLikelyFlyingfish-size_restricted-1.gif?fit=800%2C600&amp;ssl=1 " style=" position: absolute; top: 50%;transform: translate(-50%, -50%);" ;
// 
}
?>
