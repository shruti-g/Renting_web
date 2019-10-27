<?php
  session_start();

  $username = $_SESSION['username'];
  $itemname="";
  $itemdetails="";
  $errors = array(); 
  
  $user_check_query = "SELECT * FROM users WHERE username='$username LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  $email =$user['email'];
  

  $db = mysqli_connect('localhost', 'root', '', 'rent');

  if (isset($_POST['add_item'])) 
  {
    $itemname = mysqli_real_escape_string($db, $_POST['itemname']);
    $itemdetails = mysqli_real_escape_string($db, $_POST['itemdetails']);
    if (empty($itemname)) 
    { 
      array_push($errors, "Itemname is required"); 
    }
    if (empty($Itemdetails))
    { 
      array_push($errors, "Item details are required");
    }
}

    if (count($errors) == 0) 
    {
      $query = "INSERT INTO items (username, email, itemname,itemdetails) VALUES('$username', '$email', '$itemname','$itemdetails')";
      mysqli_query($db, $query);
    }
  
?>