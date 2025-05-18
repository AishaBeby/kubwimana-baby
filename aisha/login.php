




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;

    text-align: center;
    padding-top: 50px;
}


form {
    background-color: #345456;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    display: inline-block;
}


input {
    padding: 10px;
    margin: 5px;
    border-radius: 5px;
    border: 1px solid #bbb;
    background-color: transparent;
}

button {
    background-color: #76898;
    color: red;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: 34567;
}


        </style>
</head>
<body>
    <center> >
<H2> kubwimana aisha</H2>
    <form action="" method="POST">

       <h2>LOGIN</h2>
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="SAVE">LOGIN</button>
      <button type="submit" name="SAVE"><a href="account.php">back to create account</a></button>
       

        </center>
         
            </form>
          <?php
             include("connection.php");
             if(isset($_POST['SAVE'])){
                $Username=$_POST['username'];
                $password=$_POST['password'];
                $insert="INSERT INTO `account`( `username`, `password`) VALUES ('$Username','$password')";
                $query=mysqli_query($con,$insert);
                if($query==true){
                   // echo "data inserted";
                    header("location:insert.php");

                }

               else{

           }             }

              ?>


</body>
</html>



