<?php include'conn.php' ; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>Registration</h2>
        <form action="" method="POST">
              <div class="form-group">
                  <label for="firstname">FIRST NAME:</label>
                  <input type="text" id="first" name="first" required>
              </div>
              <div class="form-group">
                  <label for="lastname">LAST NAME:</label>
                  <input type="text" id="last" name="last" required>
              </div>
              <div class="form-group">
                <label for="tel">PHONE</label>
                <input type="number" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">EMAIL:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">PASSWORD:</label>
                <input type="password" id="password" name="pass1" required>
            </div>
            <div class="form-group">
                <label for="password">CONFIRM PASSWORD:</label>
                <input type="password" id="password" name="pass2" required>
            </div>
            
                <button type="submit" name="submit"> REGISTRATION</button>
                <p>you don't have an account? click <a href="login.php">here</a> to register</p>
        </form>




    <?php
		if(isset($_POST['submit']))
		{
      $firstname= $_POST['first'];
      $lastname= $_POST['last'];
			$phone= $_POST['phone'];
			$userEmail= $_POST['email'];
			$pass1= $_POST['pass1'];
			$pass2= $_POST['pass2'];


			if(empty($firstname))
			{
				echo "<script>alert('please enter first name!')</script>";
      }
      elseif(empty($lastname))
			{
        echo "<script>alert('please enter last name!')</script>";
      }
			elseif(empty($phone))
			{
				echo "<script>alert('please enter phone number!')</script>";
			}
			elseif (empty($userEmail))
			{
				echo "<script>alert('please enter email!')</script>";
			}
			else if(empty($pass1))
			{
				echo "<script>alert('please enter a password!')</script>";
			}
			elseif (empty($pass2))
			{
				echo "<script>alert('please confirm your password!')</script>";
			}
			else
			{
				if($pass1 === $pass2)
				{
					$insert= "INSERT INTO accounts (firstname,lastname,email,phone,pass1,pass2) VALUES ('$firstname','$lastname','$userEmail','$phone','$pass1','$pass2')";
					$query =mysqli_query($conn,$insert);

					if($query==true)
					{
            echo "<script>alert('Registration successful..')</script>";
            header("location: ../dashboard.php");
					}
					else
					{
						echo "<script>alert('Registration error()!')</script>";
					}


				}
				else
				{
					echo "<script>alert('Error password mismatch!')</script>";
				}
			}
			
		}?>
  </div>
</body>
</html>