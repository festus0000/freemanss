<?php include'conn.php' ; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>LOGIN</h2>
        
<form action="" method="POST" class="log" >
             <label for="Email">Email:</label>
                <input type="text" id="email" name="email" placeholder="please enter your email used during registration" required>
            <label for="password">Password:</label>
                <input type="password" id="password" name="pass2" placeholder="please enter your password" required><br><br>
                <button type="submit" class="submits" name="submit"> LOGIN</button>
                <p>you don't have an account? click <a href="registration.php">here</a> to register</p>
</form>


<?php

if(isset($_POST['submit']))
		{
			$email= $_POST['email'];
			$pass2= $_POST['pass2'];


			if(empty($email))
			{
				echo "<script>alert('please enter email!')</script>";
			}
			elseif(empty($pass2))
			{
                echo "<script>alert('please enter a password!')</script>";
			}
            else{
                $insert ="SELECT*FROM accounts WHERE email='$email' AND pass2='$pass2'";
                $query =mysqli_query($conn,$insert);
                if (mysqli_num_rows($query)== 1)
                {
                header("location: ../dashboard.php");
                }else
                {
					echo "<script>alert('INVALID username or password')</script>";
				}
            }
        }
?>



</body>
</html>
