<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!--CSS PLUGIN-->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/bootstrap/css/fontawesome.css">
    <link rel="stylesheet" href="./vendor/bootstrap/css/owl.css">
    <link rel="stylesheet" href="./css/style.css">
   <!--addtional css files-->
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/fun.css">
</head>
<body>
    <header>
        <div class="up-header">
            <div class="log">
                <a href="home.html"><h1 class="myh1" style="color: darkgreen; text-decoration: none;">EVAL & <span>RESPONSE</span></h1></a>
            </div>
     
        <nav class="navbar navbar-expand-sm  " style="margin-left: 8cm; margin-bottom: 0.8cm; cursor: pointer;" >
            <ul class="navbar-nav">
               <li class="nav-link"><a href="" class="nav-item" style="color: rgb(36, 118, 36); text-decoration: none;" >course</a></li>
               <li class="nav-link"><a href="" class="nav-link" style="color: rgb(36, 118, 36);text-decoration: none;">discover</a></li>
               <li class="nav-item"><a href="" class="nav-link" style="color: rgb(36, 118, 36   ); text-decoration: none;">learning</a></li>
            </ul>
              
                </nav>
        </div>
    <div class="container mt-3">
        <div class="banner">
            <img src="./assets/image/banner1.jpg" width="850px" height="200px">
        </div>
        <h1>ADMIN / LOGIN PAGE <a href="index.html">HOMEpage</a> </h1>
     <form action="login.php" method="post">
       <label>username</label>
       <input type="text" name="name" id="unm" style="width: 12cm; margin: 2px;"><br>
        <label>password</label> 
        <input type="password" name="password" id="PSSW" style="width: 12cm;" ><br>
        <button name="login" class="btn btn-succes">login</button>  ? <a href="register.php">register here</a>
     </form> 
     <?php
session_start();
 
 include('connection.php');

if(isset($_POST['login'])){
    $u_name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE name='$u_name'";
    $result = $conn->query  ($sql);

    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['name'] = 'name';
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found.";
    }
}


?>
  <?php
    $sql = "SELECT * FROM users WHERE name = '$u_name'";
    $result = $conn->query($sql);
    
    if ($result === false) {
        die("Query failed: " . $conn->error); // Display the error message
    }
    
   ?>
    </div>
    </div>
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/jquery/jquery.js"></script>
</body>
</html>