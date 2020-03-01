<?php
$id=$_POST['id'];

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

$sql="SELECT id,name,rollno,date FROM studentinsert where id='$id'";

$result= mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result-> fetch_assoc()) {
        echo "<table border=2><tr><th>ID</th><th>Name</th><th>RollNO</th><th>Date</th></tr>";
        
        echo"<tr><td>".$row["id"]."</td> <td>". $row["name"]."</td><td>". $row["rollno"]."</td><td>". $row["date"]."</td></tr><br>";
        echo "</table>";
    }
} else {
    echo "0 results";
}

$conn->close();