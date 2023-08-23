
<?php
    $conn = new mysqli('localhost', 'root', '', 'logindb');
    $username = $_POST["username"];
    $password = $_POST["password"];
    $myquery = "SELECT username FROM details WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($myquery);
    if ($result->num_rows > 0) {
        
        $message="Welcome, " . $username;
    } else {
        $message="Invalid Username or Password";
    }
?>

<!doctype html>
<html lang="en">

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <div class=" container d-flex flex-row justify-content-center mt-5">
        
       
                <h1 class="m-5"> <?php echo $message; ?> </h3>
                
                
  
            </div>
        </div>
    </div>

