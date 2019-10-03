<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
include 'db_connection.php';
	$conn = OpenCon();	
	mysqli_query($conn,"SET NAMES UTF8");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Въведете потребителско име!"); }
  if (empty($email)) { array_push($errors, "Въведете имейл!"); }
  if (empty($password_1)) { array_push($errors, "Въведете парола!"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Двете пароли не съвпадат!");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Потребителското име вече съществува!");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Имейл адресът вече съществува!");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Успешно влязохте в профила си!";
  	header('location: index.php');
  }
}

// ... 

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) 
  {
  	array_push($errors, "Въведете потребителско име!");
  }
  if (empty($password)) 
  {
  	array_push($errors, "Въведете парола!");
  }

  if (count($errors) == 0) 
  {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) 
    {

      if($username == 'admin')
      {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Успешно влязохте в профила си!";
      header('location: admin/index.php');
      }
       else 
       {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Успешно влязохте в профила си!";
        header('location: index.php');
        }
    
    
    }else 
    {
  		array_push($errors, "Грешно потребителско име или парола!");
    }
  } 
  }


?>