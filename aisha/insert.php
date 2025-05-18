   


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    .menu{
      width: 400px;
      height: 450px;
      background-color: pink;
      border-radius: 20px;
    }
    input{
            width: 70%;
      padding: 11px;
      margin: 12px 0;
      background-color: transparent;
      font-size: 14px;

    }
     button {
      width: 60%;
      padding: 10px;
      margin: 10px 0;
      font-size: 16px;
      cursor: pointer;
      border: none;
      border-radius: 20px;
      color: white;
    }
    .bl {
      background-color: blue;
    }
    .gn {
      background-color: green;
    }
    .yl {
      background-color: orange;
    }
    .output {
      margin-top: 20px;
      font-size: 18px;
      font-weight: bold;
    }
  </style>
</head>
<body>
   <center>
     
    <h2>KUBWIMANA AISHA</h2></center>
    <center>
   <div class="menu">
    <label for="depositAmount">Deposit money:</label><br>
    <input type="number" id="depositAmount" placeholder="deposit money"><br><br>

    <button onclick="deposit()" class="bl">Deposit</button><br>

    <label for="withdrawAmount">Withdraw money:</label><br>
    <input type="number" id="withdrawAmount" placeholder="with drow money rwf"><br><br>

  
    <button onclick="withdraw()" class="gn">Withdraw</button><br>
    <button onclick="checkAccount()" class="yl">Check balance</button>

    <div class="output" id="output"></div>
  <button type="submit" name="SAVE"><a href="login.php">back to login</a></button>
  </div>
 

  <script>
    let balance = 0;

    function deposit() {
      const amount = parseFloat(document.getElementById("depositAmount").value);
      if (!isNaN(amount) && amount > 0) {
        balance += amount;
        document.getElementById("output").innerText = `Deposited: $${amount.toFixed(2)}\nNew Balance: $${balance.toFixed(2)}`;
        document.getElementById("depositAmount").value = '';
      } else {
        alert("Please enter a valid deposit amount.");
      }
    }

    function withdraw() {
      const amount = parseFloat(document.getElementById("withdrawAmount").value);
      if (!isNaN(amount) && amount > 0) {
        if (amount <= balance) {
          balance -= amount;
          document.getElementById("output").innerText = `Withdrawn: $${amount.toFixed(2)}\nNew Balance: $${balance.toFixed(2)}`;
          document.getElementById("withdrawAmount").value = '';
        } else {
          alert("Insufficient balance.");
        }
      } else {
        alert("Please enter a valid withdrawal amount.");
      }
    }

    function checkAccount() {
      document.getElementById("output").innerText = `Current Balance: $${balance.toFixed(2)}`;
    }

  </script>
  </center>

  </body>
</html>
