<?php 
require('./nav_sign-in.php');
require('./db.php');
require('./functions.php');
session_start();
?>


<!-- Logic to handle when submit button is hit -->

<?php

if(isset($_POST['submit'])) {

    $email = get_safe_value($_POST['email']);
    $password = get_safe_value($_POST['password']);
    
    // Login Query to check if the email submitted is present or registered
    $loginQuery = " SELECT * FROM users 
                    WHERE email = '{$email}'";
    
    // Running the Login Query
    $result = mysqli_query($con, $loginQuery);
    
    // Returns the number of rows from the result retrieved.
    $rows = mysqli_num_rows($result);

    // If query has any result (records) => If any user with the email exists
    if($rows > 0) {

      // Fetching the data of particular record as an Associative Array
      while($data = mysqli_fetch_assoc($result)) {

        // Verifing whether the password matches the hash from DB
        //$password_check = password_verify($password, $data['password']);
        $password_check = $password == $data['password'] ? true : false;
        // If password matches with the data from DB
        if($password_check) {

        

          // Setting user specific session variables
          $_SESSION['USER_NAME'] = $data['username'];
          $_SESSION['USER_LOGGED_IN'] = "YES";
          $_SESSION['USER_ID'] = $data['id'];
          $_SESSION['USER_EMAIL'] = $data['email'];

          // Redirected to home page
          $loginMessage = "Login Successful " . ucfirst($_SESSION['USER_NAME']) . " " . $_SESSION['USER_EMAIL'] . " " . $_SESSION['USER_ID'];
          alert($loginMessage);
          redirect('./index.php');
        }

        else {
          // Redirected to login page along with a message
          alert("Wrong Password");
          //redirect('./sign_in.php');
        }
      }     
    }
    // If the email is not registered 
    else {

      // Redirected to signup page along with a message
      alert("This Email is not registered. Please Register");
      redirect('./user-login.php');
    }
  }

?>


<div class="form-container">

  <div class="form">
    <div class="form__header">
      <h1 class="form__title">Sign In</h1>
      <p class="form__text">
        New to Alibaba? <a href="./sign_up.php">Sign Up</a>
      </p>
    </div>
    <form action="./sign_in.php" method="POST" class="form__form">
      <div class="form__group">
        <label for="email" class="form__label">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          class="form__input"
          placeholder="Enter your email"
          required
        />
      </div>
      <div class="form__group">
        <label for="password" class="form__label">Password</label>
        <input
          type="password"
          name="password"
          id="password"
          class="form__input"
          placeholder="Enter your password"
          required
        />
      </div>
      <div class="form__group">
        <button class="form__btn" name="submit" type='submit'>Sign In</button>
      </div>
    </form>
  </div>
  </body>
</html>
