<html>
<head>
  <title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </title>
</head>

<body>
  <style type="text/css">
    
table{
  margin: auto;
  font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
  font-size: 12px;
}

table td{
  transition: all .5s;
}




  </style>


  <div id="wrapper">
        <header>
          
          <p align="center"><h2><font color="red">Welcome To ANITS Blood bank !</font></h2></p>
    
        </header>
  
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

$sql="SELECT * FROM registeration where bgroup='O+'";
$mysqlresult=mysqli_query($conn, $sql);
//$row=mysqli_fetch_array($mysqlresult,MYSQLI_ASSOC);
$count=mysqli_num_rows($mysqlresult);

    ?><br><br><br><br><br><br><br><br><br><br><br>
    <center>
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
</div>

    </center>

</body>
</html>