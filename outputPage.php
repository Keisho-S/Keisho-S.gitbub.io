
<!---------------------------php----------------------------------->
<?php 
            $servername="localhost";
            $username="root";
            $password="";
            $database="sao_profile";

            // Create connection
            $conn3=mysqli_connect($servername,$username,$password,$database);

            // Get connection errors
            if(!$conn3){
              echo ("Connection failed: " .mysqli_connect_error($conn3));
            }

            //SQL QUERY
            $query="SELECT id, studentName, gender, birthday FROM`student`;";

            //Fetching data from database
            $output=mysqli_query($conn3,$query);

            if (mysqli_num_rows($output)>0) {
              
            }
            else {
              echo "<p class='echo'> 0 results </p>";
              
          }
        
         $conn3->close();
        
        ?>
<!---------------------------php ending--------------------------->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAO Survivor Output</title>
    <link rel="shortcut icon" href="sao.ico" type="image/x-icon" />
    <!-- icon: https://aminoapps.com/c/sword-art-online-69/page/blog/hola-comunidad/X0vL_bXigu71NVNkBjbYrP3jawEebNbw70 -->
    <!-- cover:  https://www.artstation.com/laeve -->
    <link rel="stylesheet" href="swordStyle.css" />
  </head>
  <body class="out">
    <header>
      <nav>
        <ul>
          <li><a href="index.php">Input Page</a></li>
          <li><a href="outputPage.php">Output Page</a></li>
        </ul>
      </nav>
    </header>
    <main>
    <h1 class="outfix">SAO Survivor List</h1>    
    <table>
        <thead>
            <tr>
              <div class="outfix">
                <th>ID</th>
                <th>Student Name</th>
                <th>Gender</th>
                <th>Birthday</th>
              </div>
            </tr>
        </thead>
        <tbody>
            <?php
                 while ($row=mysqli_fetch_assoc($output)){?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['studentName']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['birthday']; ?></td>
                <tr>
            <?php } ?>
        </tbody>
    </table>
   
    </main>
    <footer>
      <p>Author: Keisho Seiho</p>
    </footer>
  </body>
</html>
