<?php
include(ROOT_PATH . "/apps/database/db.php");
include(ROOT_PATH . "/apps/helpers/validateUser.php");
$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
//here we register our user in the database and also we check for possible errors
if (isset($_POST['register-btn'])){
$errors = validateUser($_POST);
//checks if there is no possible errors and execute
if(count($errors) === 0){
    unset($_POST['register-btn'], $_POST['passwordConf']);
    $_POST['admin'] = 0;
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //we create our user by invoking the create method
    $user_id = create('users',$_POST);
    $user = selectOne('users',[ 'id'=> $user_id]);
  //login session
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = "you are now logged in";
    $_SESSION['type'] = 'success';
    if($_SESSION['admin']){
        header('location: ' . BASE_URL . '/admin/dashboard.php');
    }
    else{
    header('location: ' . BASE_URL . '/index.php');

    }
exit();
}
// maintains the details after the user enters even if he fails
//  to enter a certain field then it maintains the others
else{
    $username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConf = $_POST['passwordConf'];
  } 
}
?>