<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAVLUATION AND ONLINE FEEDBACK</title>
    
<!--jquery link-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!--css plugin files-->
  <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/fun.css">
  <link rel="stylesheet" href="./vendor/bootstrap/css/flex-slider.css">
  <link rel="stylesheet" href="./vendor/bootstrap/css/animate.css">
  <link rel="stylesheet" href="./vendor/bootstrap/css/owl.css">
</head>
<body>
    <header>
        <div class="up-header">
            <script>
                const colors = ["#D3D3D3", "#33FF57", "#3357FF", "#F1C40F", "#8E44AD", "#1ABC9C"];
        let index = 0;

        function changeBackgroundColor() {
            document.body.style.backgroundColor = colors[index]; 
            index = (index + 1) % colors.length;
        }

    
        changeBackgroundColor();

        setInterval(changeBackgroundColor, 70000);
                </script>
            <div class="log">
                <a href="home.html"><h1 id="myh1" style="color: darkgreen; text-decoration: none;">EVAL & <span>RESPONSE</span></h1></a>
            </div>
     
        <nav class="navbar navbar-expand-sm  " style="margin-left: 8cm; margin-bottom: 0.8cm; cursor: pointer;" >
            <ul class="navbar-nav">
               <li class="nav-link"><a href="" class="nav-item" style="color: rgb(36, 118, 36); text-decoration: none;" >course</a></li>
               <li class="nav-link"><a href="" class="nav-link" style="color: rgb(36, 118, 36);text-decoration: none;">discover</a></li>
               <li class="nav-item"><a href="" class="nav-link" style="color: rgb(36, 118, 36   ); text-decoration: none;">learning</a></li>
            </ul>
              
                </nav>
        </div>
            <form action="" method="post" class="form-control">
                <label for="course" class="custom-label">course</label>
                <select name="course" id="custom-select-option" class="custom-select" style="height: 3rem;">
                    <option value="python" class="dropdown-item">python</option>
                    <option value="python" class="dropdown-item">machine learning</option>
                    <option value="python" class="dropdown-item">devops</option>
                    <option value="python" class="dropdown-item">Nosql database</option>
                    <option value="python" class="dropdown-item">Mobile App</option>
                    <option value="python" class="dropdown-item">React using node.js</option>
                    <option value="python" class="dropdown-item">Quarity Assurance</option>
                    <option value="python" class="dropdown-item">Block chain</option>
                    <option value="python" class="dropdown-item">Mathematics</option>
                    <option value="python" class="dropdown-item">Kinyarwanda</option>
                    <option value="python" class="dropdown-item">English</option>
                    <option value="python" class="dropdown-item">Bussiness</option>
                    <option value="python" class="dropdown-item">Phyiscs</option>
                    
                </select>
                <button class="btn btn-btn success" style="height: 3rem; margin: 10px; background-color: brown;">search</button>
            </form>

       <main>
        <div class="containers">
            <div class="container1">
               
            </div>
            <div class="container2">

            </div>
            
        </div>
       </main>
    </header>
</body>
</html>