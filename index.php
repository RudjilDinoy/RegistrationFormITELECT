<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <style>
        html, body {
        
            height: 100%;
            overflow: hidden; 
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            
            min-height: 100vh; 
            /* padding-left: 5%; */
            background-image: url(c.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-position: center;
        }
        .form-card {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
            max-height: 90vh;
            overflow-y: auto; 
        }
        .form-card h1 {
            color: #333;
            margin-bottom: 5px;
        }
        .form-card p {
            color: #666;
            margin-bottom: 25px;
        }
        hr {
            border: 0;
            height: 1px;
            background-color: #ddd;
            margin: 25px 0;
        }
        .input-group {
            text-align: left;
            margin-bottom: 20px;
        }
        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f9f9f9;
            transition: border-color 0.3s;
        }
        input[type=text]:focus,
        input[type=password]:focus {
            outline: none;
            border-color: #007bff;
            background-color: #fff;
        }
        .registerbtn {
            background-color: #007bff;
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .registerbtn:hover {
            background-color: #0056b3;
        }
        .terms-text {
            color: #666;
            font-size: 14px;
            margin-top: 20px;
            text-align: center;
        }
        .terms-text a {
            color: #007bff;
            text-decoration: none;
        }
        .signin-text {
            text-align: center;
            margin-top: 25px;
            color: #666;
        }
        .signin-text a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="form-card">
        <form action="display.php" method="post">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
        
            <div class="input-group">
                <label for="FirstName">First Name</label>
                <input type="text" placeholder="Enter First Name" name="FirstName" id="FirstName" required>
            </div>
            
            <div class="input-group">
                <label for="LastName">Last Name</label>
                <input type="text" placeholder="Enter Last Name" name="LastName" id="LastName" required>
            </div>
        
            <div class="input-group">
                <label for="psw">Password</label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            </div>
        
            <div class="input-group">
                <label for="psw-repeat">Repeat Password</label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
            </div>
            <hr>
            
            <div class="input-group">
                <label for="ID">ID</label>
                <input type="text" placeholder="Enter ID" name="ID" id="ID" required>
            </div>
            
            <div class="input-group">
                <label for="number">Contact Number</label>
                <input type="text" placeholder="Enter Contact Number" name="number" id="number" required>
            </div>
            
            <div class="input-group">
                <label for="birthdate">Birth Date</label>
                <input type="text" placeholder="Enter Birth Date" name="birthdate" id="birthdate" required>
            </div>
            
            <div class="input-group">
                <label for="address">Address</label>
                <input type="text" placeholder="Enter Address" name="address" id="address" required>
            </div>
            
            <div class="input-group">
                <label for="emergencycontact">Emergency Contact</label>
                <input type="text" placeholder="Enter Emergency Contact" name="emergencycontact" id="emergencycontact" required>
            </div>
            
            <p class="terms-text">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Register</button>
        </form>
        
        <div class="signin-text">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </div>
</body>
</html>