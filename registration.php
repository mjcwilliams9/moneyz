<!DOCTYPE html>
<head>
    <metacharset="UTF-8">
    <metaname="viewport"content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
+

<form action="registration.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill this form in to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href=-"#">Login</a>.</p>
  </div>
</form>