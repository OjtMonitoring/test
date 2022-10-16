<html>

<head>
<title>jayson</title>
</head>
<body>
<?php
$name = filter_input(INPUT_POST, 'name');
$password = filter_input(INPUT_POST, 'password');




    if (!empty($name)){
   if (!empty($password)){
       
    $host = 'db4free.net:3306'; 
    $dbuser = 'koutarou';
    $dbpassword = 'Jchermano31';
    $dbname = 'ojtputi';
    $conn = new mysqli ($host,$dbuser,$dbpassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error('.
        mysqli_connect_errno().')'.
        mysqli_connect_errno());
    }

     else {
        $query = "SELECT * FROM coordinator WHERE name='$name' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
           echo '<a href="https://animesekai01.000webhostapp.com/index.html">you can check if your already register here</a>';
            
         }
         else {
             echo "Error:". $sql ."<br>". $conn->error;
         }
         $conn->close();
     }
   }
   else {
       echo "password must not empty";
        die();
   }
}
else {
    echo "username must not empty";
     die();

}
    
    







?>
</html>