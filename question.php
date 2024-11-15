<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTION EVAL&RESPONSE</title>
    <!--fontawesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--CSS PLUGIN-->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/bootstrap/css/fontawesome.css">
    <link rel="stylesheet" href="./all.css">
</head>
<body>
      <header>
        <div class="up-header">
          <a href="./question.html"><h1>EVAL & <span>RESPONSE</span></h1></a>
          <nav>
            <ul>
                <li><a href="">course</a></li>
                <li><a href="">question</a></li>
                <li><a href="">learning</a></li>
               

            </ul>
          </nav>
        </div>
        <div class="container"> <h2>Course Registration</h2> 
          <form action="register.php" method="POST"> 
            <label for="courseName">Course Name:</label> 
            <input type="text" id="courseName" name="courseName" required>
             <label for="courseTopics">Course Topics:</label> 
             <textarea id="courseTopics" name="courseTopics" required></textarea> 
             <label for="courseInfo">Course Info:</label> 
             <textarea id="courseInfo" name="courseInfo" required>
              </textarea> 
              <button type="submit">Register Course</button> 
        </form> 
        <?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courseName = $_POST['courseName'];
    $courseTopics = $_POST['courseTopics'];
    $courseInfo = $_POST['courseInfo'];

    $sql = "INSERT INTO courses (name, topics, info) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $courseName, $courseTopics, $courseInfo);

    if ($stmt->execute()) {
        echo "New course registered successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

      </div>
      </header>
</body>
</html>