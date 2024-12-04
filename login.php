<!DOCTYPE html>
<html lang="en">

<head>
  <title>Signup</title>
  <link rel="stylesheet" href="style.css"> <!-- Link to the same CSS file -->
  <link rel="stylesheet" href="styleLogin.css" /> <!-- Keep this if you have specific styles for login -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-image: url('loginbg.jpg');
      /* Set the background image */
      background-size: cover;
      /* Cover the entire viewport */
      background-position: center;
      /* Center the image */
      position: relative;
      /* Position relative for the pseudo-element */
      overflow: hidden;
      /* Hide overflow */
    }

    /* Pseudo-element for blur effect */
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url('loginbg.jpg');
      /* Set the same background image */
      background-size: cover;
      /* Cover the entire viewport */
      background-position: center;
      /* Center the image */
      filter: blur(15px);
      /* Apply blur effect */
      z-index: 1;
      /* Place it behind the content */
    }

    .signup {
      position: relative;
      /* Position relative to stack above the pseudo-element */
      border: none;
      width: 90%;
      max-width: 400px;
      height: 550px;
      color: rgb(232, 193, 193);
      border-radius: 20px;
      box-shadow: 0px 4px 20px rgba(195, 10, 128, 0.5);
      background-color: rgba(255, 255, 255, 0.5);
      /* Semi-transparent background for readability */
      z-index: 2;
      /* Place it above the blurred background */
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <div class="signup">
    <form action="formhandler.inc.php" method="post">
      <h1>Sign Up</h1>
      <label>Username</label>
      <input type="text" name="username" placeholder="Username">
      <label>E-mail</label>
      <input type="text" name="email" placeholder="E-mail">
      <label>Password</label>
      <input type="password" name="pw" placeholder="Password">
      <button>Signup</button>
    </form>
  </div>
</body>

</html>