<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'record_store');
// initializing variables
$full_name = "";
$username = "";
$password = "";
$confirmpassword = "";
$email = "";
$created_at ="";
$address = "";
$city = "";
$state = "";
$zip_code = "";
$phone_num = "";
$employee_status = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'record_store');
// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $zip_code = mysqli_real_escape_string($db, $_POST['zip_code']);
  $phone_num = mysqli_real_escape_string($db, $_POST['phone_num']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($full_name)) {
    array_push($errors, "Name is required");
  }
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if ($password != $confirmpassword) {
    array_push($errors, "The two passwords do not match");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password); //encrypt the password before saving in the database

    $query = "INSERT INTO `users`(`full_name`, `username`, `password`,`email`,`address`,`city`,`state`,`zip_code`,`phone_num`) 
    VALUES ('$full_name', '$username', '$password', '$email', '$address', '$city', '$state','$zip_code', '$phone_num')";

    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
else {
  $_SESSION['errors'] = $errors;
  header("Location: {$_SERVER['HTTP_REFERER']}");
}
exit;
}

// UPDATE USER
if (isset($_POST['update'])) {
  echo 'update';
  // receive all input values from the form
  $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $zip_code = mysqli_real_escape_string($db, $_POST['zip_code']);
  $phone_num = mysqli_real_escape_string($db, $_POST['phone_num']);
  
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($full_name)) {
    array_push($errors, "Name is required");
  }
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    // array_push($errors, "Password is required");
  }
  if ($password != $confirmpassword) {
    array_push($errors, "The two passwords do not match");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  

  // Finally,update user if there are no errors in the form
  if (count($errors) == 0) {

    if(empty($password)){
      $query = mysqli_query($db, "UPDATE users SET full_name = '$full_name',
      username = '$username', email = '$email', address='$address', city='$city',
      state='$state', zip_code='$zip_code', phone_num = '$phone_num'
      WHERE username='" . $_SESSION['username'] . "'");

    }else{

      $password = md5($password); //encrypt the password before saving in the database

      $query = mysqli_query($db, "UPDATE users SET full_name = '$full_name',
      username = '$username', password = '$password', email = '$email', address='$address', city='$city',
      state='$state', zip_code='$zip_code', phone_num = '$phone_num'
      WHERE username='" . $_SESSION['username'] . "'");
    }
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Profile updated";
    header('location: index.php');
  }
else {
  $_SESSION['errors'] = $errors;
  header("Location: {$_SERVER['HTTP_REFERER']}");
}
exit;
}

// LOGIN USER
if (isset($_POST['login'])) {
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  // print_r($errors);
  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
   
    $results = mysqli_query($db, $query); 
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    } else {
      array_push($errors, "Wrong username/password combination");
      $_SESSION['errors'] = $errors;
      header("Location: {$_SERVER['HTTP_REFERER']}");
    
    }
  } else {
    $_SESSION['errors'] = $errors;
    header("Location: {$_SERVER['HTTP_REFERER']}");
  }

  exit;
}

//Product page
if (isset($_POST['product_id']) && $_POST['product_id']!=""){
    $product_id = $_POST['product_id'];
    $result = mysqli_query($db,"SELECT * FROM `products` WHERE `product_id`='$product_id'");
    $row = mysqli_fetch_assoc($result);
    $product_title = $row['product_title'];
    $product_id = $row['product_id'];
    $price = $row['price'];
    $product_img = $row['product_img'];
    
    $cartArray = array(
      'product_title'=>$product_title,
      'product_id'=>$product_id,
      'price'=>$price,
      'quantity'=>$_POST['quantity']??1,
      'product_img'=>$product_img);
    
    if(empty($_SESSION["shopping_cart"])) {

        $_SESSION["shopping_cart"][$product_id] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
    }else{
        if(isset($_SESSION["shopping_cart"][$product_id])) {

          $_SESSION["shopping_cart"][$product_id]['quantity'] = $_POST['quantity']??1;

        } else {
          $_SESSION["shopping_cart"][$product_id] = $cartArray;
          $status = "<div class='box'>Product is added to your cart!</div>";
    }
    
    }

    $_SESSION['success'] = "Cart updated";

    header("Location: {$_SERVER['HTTP_REFERER']}");

  }



