<?php

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT * FROM registeration where bgroup='A+'";
$mysqlresult=mysqli_query($conn, $sql);
//$row=mysqli_fetch_array($mysqlresult,MYSQLI_ASSOC);
$count=mysqli_num_rows($mysqlresult);

    ?>
<table border="2">
  <thead>
    <tr>
      <th>Name </th>
      <th>Number</th>
      <th>Address </th>
      <th>Gender </th>
      <th>Year</th>
      <th>Section</th>
      <th>Email</th>
<th>DateOfBirth</th><th>Mobile</th>
      <th>BloodGroup</th>
      </tr>
  </thead>
  <tbody>
    <?php
      if( $count==0 ){
        echo '<tr><td colspan="4">No Data to Display</td></tr>';
      }else{
      
        while( $row =mysqli_fetch_assoc( $mysqlresult ) )
        {
          echo "<tr><td>{$row['name']}</td><td>{$row['num']}</td><td>{$row['address']}</td><td>{$row['gender']}</td><td>{$row['year']}</td><td>{$row['section']}</><td>{$row['email']}</td><td>{$row['dob']}</td><td>{$row['mobile']}</td><td>{$row['bgroup']}</td><td></tr>\n";

        
        }
      }
    ?>
  </tbody>
</table>
    <?php

?>
</body>
</html>