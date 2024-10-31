
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
<!--CSS PLUGIN-->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/fun.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./vendor/bootstrap/css/flex-slider.css">
    <link rel="stylesheet" href="./vendor/bootstrap/css/animate.css">
    <link rel="stylesheet" href="./vendor/bootstrap/css/owl.css">
</head>
<body>
    <script>
       
        const colors = ["#D3D3D3", "#33FF57", "#3357FF", "#F1C40F", "#8E44AD", "#1ABC9C"];
        let index = 0;

        function changeBackgroundColor() {
            document.body.style.backgroundColor = colors[index]; 
            index = (index + 1) % colors.length;
        }


        changeBackgroundColor();

        setInterval(changeBackgroundColor, 60000);
    </script>   
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
        <h2>Register Here</h2>
        <form method="POST"  action=""  style="text-align: center; margin: 17px; padding: 2rem;">
            <label for="name">Name:</label>
            <input type="text" name="name"  placeholder="enter your username" style="width: 600px;"><br>
            <label for="email">Email:</label>
            <input type="text" name="u_email" placeholder="enter your email" style="width: 600px;"><br>
            <label for="password">password:</label>
            <input type="password" name="password" placeholder="enter your password" style="width: 600px;"><br>
            <button class="btn" name="register">Register</button> or <a href="./login.php" style="margin: 12px;"> LOG here </a>
        </form>
        <?php




if(isset($_POST['register'])){
    $u_name = $_POST['name'];
    $u_email = $_POST['u_email'];
    $u_password = $_POST['password'];
  
  include('connection.php');      
    $hashed_password = password_hash($u_password, PASSWORD_DEFAULT);
    $insert="INSERT INTO `user` VALUES ('','$u_name','$u_email','$hashed_password')";
   
    $run=mysqli_query($conn,$insert);
}
?>

</header>
</body>
</html>