<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARGIE'S PLACE | Register</title>
</head>
<body>
    <div class="Login_Form">
        <h1>Register</h1>
        <div class="form-box">
            <form action="Register.php" method="post">
                <div class="input-field">
                    <input type="text" name="Firstname" id="RFirst_name" placeholder="Enter your first name" required>
                </div>
                <div class="input-field">
                    <input type="text" name="Lastname" id="RLast_name" placeholder="Enter your last name" required>
                </div>
                <div class="Position">
                    <label for="position">Staff/Admin</label>
                    <select name="position" id="postion">
                        <option value="Staff">Staff</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <div class="input-field">
                    <input type="text" name="Email" id="Email" placeholder="Enter your email" required>
                </div>
                <div class="input-field">
                    <input type="text" name="Username" placeholder="Enter your username" required>
                </div>
                <div class="input-field">
                    <input type="password" name="Password" placeholder="Enter your password" required>
                </div>
                <div class="input-field">
                    <input type="password" name="confirmPassword" placeholder="Confirm password" required>
                </div>
                <div class="Submit">
                    <input type="submit" name="subbtn" value="Register">
                </div>
                <div class="links">
                    Already have an account? <a href="Login.php">Login Here</a>
                </div>
                
            </form>
            
        </div>
    </div>
</body>
</html>
<?php
session_start();

require_once("db.php");

if (isset($_POST['subbtn'])) {
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Position = $_POST['position'];
    $email = $_POST['Email'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Confirm = $_POST['confirmPassword'];

    if (!empty($Position) && !empty($Username) && !empty($Password)) {
        if ($Password == $Confirm) {
            if ($Position == "Staff") 
            {
                // insert data into the staff table
                $query = "INSERT INTO staff (First_Name, Last_Name, Email, Username, Password) VALUES (?, ?, ?, ?, ?)";
                $stmt = $con->prepare($query);
                $stmt->bind_param("sssss", $Firstname, $Lastname, $email, $Username, $Password);

                if ($stmt->execute()) {
                    echo "Registration successful for Staff!";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            }
            else if($Position == "Admin")
            {
                // insert data into the staff table
                $query = "INSERT INTO `admin` (First_Name, Last_Name, Email, Username, Password) VALUES (?, ?, ?, ?, ?)";
                $stmt = $con->prepare($query);
                $stmt->bind_param("sssss", $Firstname, $Lastname, $email, $Username, $Password);

                if ($stmt->execute()) {
                    echo "Registration Successful for Admin!";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            }
        } else {
            echo "Password mismatch!";
        }
    } else {
        echo "Complete all fields!";
    }
}
?>
