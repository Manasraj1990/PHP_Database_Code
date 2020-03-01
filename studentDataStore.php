<?php
$name= $_POST['name'];
$rollno= $_POST['rollno'];
$date= $_POST['date'];

$servername='localhost';
$username='root';
$password= 'manas98077raj';
$dbname='student';

$conn = mysqli_connect($servername,$username,$password,$dbname);

//check that connection stablished 
        // if(mysqli_connect_errno($conn))
        // {
        //     echo 'faild connection';
        // }
        // else{
        //     echo 'connection successful:'.$conn->connect_errno;
        // }

if($conn->connect_error)
   {
       die("connection failed :".$conn->connect_error);
   }

$sql="INSERT INTO studentinsert(id,name, rollno,date )
VALUES ('','$name','$rollno','$date')";

$run= mysqli_query($conn,$sql);
if ($run === TRUE)
{
   echo "insert done";
}
else{
    echo "Some error:".$sql."<br>".$conn->connect_error;
}

$conn->close();

?>