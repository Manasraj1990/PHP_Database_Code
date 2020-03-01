<?php
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

$sql="SELECT * FROM studentinsert";

$result= mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result-> fetch_assoc()) {
        echo " id: " .$row["id"]. " Name: " . $row["name"]. " Rollno: " . $row["rollno"]. " Date: ". $row["date"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();