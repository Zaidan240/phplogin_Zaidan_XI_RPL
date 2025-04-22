<?php
session_start();
if (!isset($_SESSION['user'])) {
 header("Location: index.php");
 exit;
}
?>
<h1>Selamat Datang <?php echo $_SESSION['user']; ?>!</h1>
<a href="logout.php">Logout</a>

<style>
    /* Reset default styles */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background: linear-gradient(120deg,rgb(8, 152, 248),rgb(13, 110, 255));
  display: ;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  background-color: #fff;
  padding: 40px 30px;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(255, 251, 251, 0.2);
  width: 100%;
  max-width: 400px;
}

.login-form h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #333;
}

.login-form input {
  width: 100%;
  padding: 12px 15px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
}

.login-form button {
  width: 100%;
  padding: 12px;
  margin-top: 15px;
  background-color: #2980b9;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: background 0.3s;
}

.login-form button:hover {
  background-color: #1c5980;
}

.signup-text {
  text-align: center;
  margin-top: 20px;
  font-size: 14px;
  color: #555;
}

.signup-text a {
  color: #2980b9;
  text-decoration: none;
}

.signup-text a:hover {
  text-decoration: underline;
}
</style>