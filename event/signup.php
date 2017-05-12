<html>
   
   <head>
      <title>Registration Form</title>
   </head>
   
   <body>
      <?php
	    if(isset($_POST['add'])) {
         $servername = "localhost";
$username = "root";
$password = "Aissel@123";
$dbname = "event_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   $name = $_POST['name'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$ph = $_POST['ph'];
			$add = $_POST['add'];
			$uname = $_POST['uname'];
			$pwd = $_POST['pwd'];
			$status = $_POST['status'];
              
$sql = "INSERT INTO MEMBERS (NAME, LASTNAME, EMAIL,PHONENUMBER,ADDRESS,USERNAME,PASSWORD,STATUS)
VALUES ('$name', '$lname', '$email','$ph','$add','$uname','$pwd','$status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
         }else {
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">NAME</td>
                        <td><input name = "name" type = "text" 
                           id = "name"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">LASTNAME</td>
                        <td><input name = "lname" type = "text" 
                           id = "lname"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">EMAIL</td>
                        <td><input name = "email" type = "text" 
                           id = "email"></td>
                     </tr>
                  <tr>
                        <td width = "100">PHONE_NUMBER</td>
                        <td><input name = "ph" type = "text" 
                           id = "ph"></td>
                     </tr>
					  <tr>
                        <td width = "100">ADDRESS</td>
                        <td><input name = "add" type = "text" 
                           id = "add"></td>
                     </tr>
					  <tr>
                        <td width = "100">USERNAME</td>
                        <td><input name = "uname" type = "text" 
                           id = "uname"></td>
                     </tr>
					  <tr>
                        <td width = "100">PASSWORD</td>
                        <td><input name = "pwd" type = "text" 
                           id = "pwd"></td>
                     </tr>
					  
					  <tr>
                        <td width = "100">STATUS</td>
                        <td><input name = "status" type = "text" 
                           id = "status"></td>
                     </tr>
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add Employee">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
            <?php
         }
      ?>
   
   </body>
</html>