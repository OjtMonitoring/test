<html>

<head>
<title>jayson</title>
</head>
<body>
<?php
$name = filter_input(INPUT_POST, 'name');
$password = filter_input(INPUT_POST, 'password');
$pass = filter_input(INPUT_POST, 'pass');
$email = filter_input(INPUT_POST, 'email');
$companyname = filter_input(INPUT_POST, 'companyname');


if ($password == $pass) {
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
         $sql ="INSERT INTO coordinator(name,password,email,companyname) values ('$name','$password','$email','$companyname')";
         if ($conn->query($sql)){
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
    
    
}


 else {
    echo "You have to enter same password";
} 




?>
</html>