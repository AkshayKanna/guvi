<html>
<form method="POST">
First Name :<input type ="text" id="Firstname"><br>
Last Name :<input type="text" id="Lastname"><br>
Email :<input type="email" id="emailid"><br>
DOB :<input type="date" id="dob"><br>
<input type="submit">
</form>
</html>
<?php
if(isset($_POST['submit'])){
  echo $_POST['Firstname'],$_POST['Lastname'];
}
?>
