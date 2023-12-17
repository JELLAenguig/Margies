<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARGIE'S PLACE | Login</title>
</head>
<body>
    <div class="Login_Form">
        <h1>Login</h1>
        <div class="form-box">
            <form action="Login.php" method="post">
                <div class="Position">
                    <label for="position">Staff/Admin</label>
                    <select name="position" id="postion">
                        <option value="Staff">Staff</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <div class="input-field">
                    <input type="text" name="username" placeholder="Enter your username" required>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="Submit">
                    <input type="submit" name="subbtn" value="Login">
                </div>
                <div class="links">
                    Don't have account? <a href="Register.php">Register Here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
