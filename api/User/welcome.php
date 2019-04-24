<?php

//Initiliaze session
session_start();

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <style>

  {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}

  .welcome-in-htm {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
  }

  .welcome-in-htm label {
  margin: 5px 10px 5px 0;
  }


  .welcome-in-htm input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
  }

  .welcome-in-htm button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
  }

  .welcome-in-htm:hover {
  background-color: royalblue;
  }

  @media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .welcome-in-htm {
    flex-direction: column;
    align-items: stretch;
  }
  }
</style>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <div class="welcome-form">
    <form class="welcome-in-htm" method="POST">
      <div class=group>

          <label for="First Name" class="label">First Name</label><br>
          <input id="Fristname" name="First name" type="text" class="input"><br>
          <label for="Last Name" class="label">Last Name</label><br>
          <input id="Lastname" name="Last name" type="text" class="input"><br>

      </div>
      <div class=group>

          <label for="email" class="label">E-Mail</label><br>
          <input id="email" type="email" class="input" data-type="input"><br>

      </div>
      <div claas=group>

          <label for="dob" class="label">DateofBirth</label><br>
          <input id="dob" type="date" class="input" data-type="date"><br>

      </div>
      <div class="group">

        <label for="user" class="label">Gender</label><br>
        <input type="radio" id="Gender" name="Gender" value="Male"> Male<br>
        <input type="radio" id="Gender" name="Gender" value="Female"> Female<br>

      </div>
      <div class="group">

      <input type="submit" id="submit" class="button" value="Submit"><br>

      </div>
    </form>
    <?php
    if(isset($_POST['submit'])){
      echo "<script> alert();</script>";
      echo $_POST['Firstname'],$_POST['Lastname'];
    }
?>
  </div>
</body>
</html>
