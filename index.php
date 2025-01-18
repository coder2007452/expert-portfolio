<?php include("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Expert Snippet</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Global Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.signup-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(to bottom, #0066cc, #ffffff);
}

.signup-form {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

.signup-form h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

.form-group label {
    font-size: 14px;
    color: #333;
}

.form-group input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.signup-btn {
    width: 100%;
    padding: 10px;
    background-color: #0066cc;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.signup-btn:hover {
    background-color: #004d99;
}

.signup-form p {
    font-size: 14px;
    color: #666;
}

.signup-form a {
    text-decoration: none;
    color: #0066cc;
}

.signup-form a:hover {
    text-decoration: underline;
}

</style>
<body>
    <div class="signup-container">
        <div class="signup-form">
            <h2>Sign Up</h2>
            <form action="home.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                </div>
                <div class="input-filed">
                    <input type="submit" value="Register" name="register" class="signup-btn"></input>
                </div>
            </form>
            <p>Already have an account? <a href="login.html">Log in</a></p>
        </div>
    </div>
</body>
</html>

<?php 
    if($_POST['register'])
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = "INSERT INTO FORM (username,email,pass) VALUES('$username','$email','$pass')";
        $data = mysqli_query($conn,$query);

        if($data){
            //echo "Data Instered Into DataBAse";
        }
        else{
            echo "Failed";
        }
    }
?>