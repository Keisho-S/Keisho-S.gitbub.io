<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAO Survivor Input</title>
    <link rel="shortcut icon" href="sao.ico" type="image/x-icon" />
    <!-- icon: https://aminoapps.com/c/sword-art-online-69/page/blog/hola-comunidad/X0vL_bXigu71NVNkBjbYrP3jawEebNbw70 -->
    <!-- cover:  https://www.artstation.com/laeve -->
    <link rel="stylesheet" href="swordStyle.css" />
  </head>
  <body class="in">
    <header>
      <nav>
        <ul>
        <li><a  href="index.php">Input Page</a></li>
        <li><a  href="outputPage.php">Output Page</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="box">
        <span class="borderLine"></span>
        <form action="index.php" method="post">
          <h1>Sword Art Online Survivor Info</h1>
          <div class="inputBox">
            <input type="number" name="id" id="id" required />
            <label for="id">Student ID</label><i></i>
          </div>
          <div class="inputBox">
            <input type="text" name="studentName" id="studentName" required />
            <label for="studentName">Student Name</label><i></i>
          </div>
          <div class="inputBox">
            <input type="text" name="gender" id="gender" required/>
            <label for="gender">Student Gender</label><i></i>
          </div>
          <div class="inputBox">
            <input type="date" name="birthday" id="birthday" required/>
            <label for="birthady">Student Birthday</label><i></i>
          </div>
          <div class="links">
            <button type="submit" name="btnSubmit" value="submit">
              SUBMIT
            </button>
          </div>
        </form>
      </div>
      <!---------------------------php----------------------------------->
      <?php
        if ($_SEVER['REQUEST_METHOD']=$_POST) {
          
          $id=$_POST['id'];          
          $studentName=$_POST['studentName'];         
          $gender=$_POST['gender'];          
          $birthday=$_POST['birthday'];
        }

        // Database connection
        $servername="localhost";
        $username="root";
        $password="";

        //(Will create sao_profile)
        $database="sao_profile";

        // Connect database
        $conn1=mysqli_connect($servername,$username,$password);
        
        // Die if connection failed
        if (!$conn1) {
          die("connection failed" .mysqli_connect_error($conn));
        }
        
        else{
          // Create database if not exists
          $createDatabase="CREATE DATABASE IF NOT EXISTS sao_profile";
          $create_db=mysqli_query($conn1, $createDatabase);
          $conn2=mysqli_connect($servername,$username,$password,$database);
          if (!$conn2) {
            die("connection failed" .mysqli_connect_error($conn2));
          }
          else{
          // If not exist, create table of students
          $studentTable="CREATE TABLE IF NOT EXISTS `student`(`id` INT NOT NULL PRIMARY KEY, `studentName` VARCHAR(45) NOT NULL, `gender` ENUM('male','female','other') NOT NULL, `birthday` DATE NOT NULL)";
          
          // Insert data to the student table
          $id = isset($_POST['id'] ) ? $_POST['id'] : '';
          $studentName = isset($_POST['studentName'] ) ? $_POST['studentName'] : ' ';
          $gender = isset($_POST['gender'] ) ? $_POST['gender'] : ' ';
          $birthday = isset($_POST['birthday'] ) ? $_POST['birthday'] : ' ';

          $insertData= "INSERT INTO `student`(`id`,`studentName`,`gender`,`birthday`) VALUE('$id','$studentName','$gender','$birthday')";

          // If press Submit botton, will insert the data to the student table
          if (isset($_POST['btnSubmit'])) {
            $tableResult=mysqli_query($conn2,$studentTable);

            // Use try-catch to catch the exception such as primary key overlaps 
            try {
              mysqli_query($conn2,$insertData);
              //If the exception is thrown, this text will not be shown
              echo "<p class='echo'>Data insert successfully</p>";
            }
            
            //catch exception
            catch(Exception $e) {
              echo "<p class='echo'>Message: </p>" ."<p class='echo'>". $e->getMessage()."</p>";
             }


            // $result=mysqli_query($conn2,$insertData);
            // if($result){
            //   echo "<p class='echo'>Data insert successfully</p>";
            // }
            // else{
            //   echo "<p class='echo'>Data insert due to </p> " .mysqli_error($conn);
            // }
          }
         }
        }
        
       ?>
      <!---------------------------php ending--------------------------->
    </main>
    <footer>
    <p><small>Author: Keisho Seiho</small></p>
    </footer>
  </body>
</html>
