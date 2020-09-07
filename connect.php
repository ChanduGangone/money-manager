    <?php
    $username = filter_input(INPUT_POST, 'username');
 
   $password = filter_input(INPUT_POST, 'password');
   
 if (!empty($username)){
    if (!empty($password))
{
    $host = "localhost";

    $dbusername = "root";
 
   $dbpassword = "";
    
$dbname = "data";
  
  $tbl_name="account";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "SELECT *FROM $tbl_name WHERE username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)>0){
    echo "WELCOME USER";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else{
    echo "Password should not be empty";
    die();
    }
    }
    else{
    echo "Username should not be empty";
    die();
    }
    ?>