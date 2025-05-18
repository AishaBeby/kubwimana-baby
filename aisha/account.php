



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
  



form {
    background-color: gray;
    border-radius: 10px;
  width: 230px;

}



input {
    padding: 10px;
    margin: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    background-color: transparent;
}

button {
    background-color: pink;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    
}

   </style>
</head>
<body>
	<center> 
	   <h2>kubwimana aisha</h2>

    <form action="" method="POST">
    	<h2> CREATE ACCOUNT</h2>
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button><a href="login.php"> create account</a></button>

        </center>
            </form>
            <?php 
             include("connection.php");
             if(isset($_POST['enter'])){
             	$Username=$_POST['username'];
                $password=$_POST['password'];
                $select="SELECT `username`, `password` FROM `login user` WHERE username='$Username' and password='$password'";
                $query=mysqli_query($con,$select);
                while($fetch=mysqli_fetch_array($query)){
                	if (is_array($fetch)) {
                		$_SESSION['username']=$fetch['username'];
                		        echo "Login successful!  " . $_SESSION['username'];
                		       
                                header("location:login.php");

    } else {
        echo "Invalid username or password.";
    }                	}
                }
             
            

             ?>
</body>
</html>