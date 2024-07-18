<?php
function validateUser($user){
    $errors = array();
if (empty($user['username'])){
    array_push($errors, "username is required");
}
if (empty($user['email'])){
    array_push($errors, "email is required");
}
if (empty($user['password'])){
    array_push($errors, "password is required");
}

if (($user['passwordConf'] !== $_POST['password'])){
    array_push($errors, "password do not match");
}
$existingUser = selectOne('users',['email' => $user['email']]);
if(isset($existingUser)){
array_push($errors, "email already exists");
}
    return $errors;

}