<?php

    $server ="localhost";
    $username ="root";
    $password ="";
    $database ="Classwork";
 
//database connection using mysql_connect
    $conn = mysqli_connect($server,$username,$password,$database);

//test if connection is successfull
    if ($conn){
      // echo "Database connected successfuly";
    }
    else
    {
        echo "error occured".mysqli_error($conn);
    }

 //isset function to submit our form
    if( isset( $_POST["submitButton"]))
    {

        //fetch form data
            $username = $_POST['username'];
            $email = $_POST['email'];

        //submit to database
            $sql = mysqli_query($conn, "INSERT INTO signup(username, email) VALUES('$username','$email')");

        //cheking if success
        if($sql)
            {
            echo "Data inserted Successfuly";
            }
        else
        {
            echo "error occered";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conneting to database</title>
</head>
<body>
<form action = "index.php " method = "POST">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>

  <button type="submit" name="submitButton">Submit</button>
</form>

</body>
</html>