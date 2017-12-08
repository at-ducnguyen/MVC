<?php

namespace App\Models;
use App\Core\Session;

class User extends Model
{
  protected $table = 'users';

  public function checkLogin($username,$password){
   $sql = "SELECT * FROM {$this->table} WHERE username = '$username' AND password = '$password'";
   $stmt = static::$db->prepare($sql);
   $stmt->execute();
   return $stmt->fetch();
 }

 public function save($data)
 {
  $sql = "INSERT INTO users(username,password,email) 
  VALUES ('{$data['username']}','{$data['password']}','{$data['email']}')";
  $stmt = static::$db->prepare($sql);
  $stmt->execute();
}

public function checkUser($user){
  $sql = "SELECT * FROM {$this->table} WHERE username = '$user'";
  $stmt = static::$db->prepare($sql);
  $stmt->execute();
  if($stmt->rowCount() > 0){
    return true;
  }
}


public function delete($id)
{
  $sql = "DELETE FROM users WHERE id=$id";
  $stmt = static::$db->prepare($sql);
  $stmt->execute();
}

public function update($data,$id)
{
  if ($data['avatar']==""){
    $sql = "UPDATE users SET 
    password='{$data['password']}',
    email='{$data['email']}'
    WHERE id=$id";
    $stmt = static::$db->prepare($sql);
    $stmt->execute();
  }
  else{
    $sql = "UPDATE users SET 
    password='{$data['password']}',
    email='{$data['email']}',
    avatar='{$data['avatar']}' 
    WHERE id=$id";
    $stmt = static::$db->prepare($sql);
    $stmt->execute();
  }
}

public function edit($data,$id)
{
  $sql = "UPDATE users SET 
  username='{$data['username']}',
  password='{$data['password']}',
  email='{$data['email']}',
  role={$data['role']} 
  WHERE id=$id";
  $stmt = static::$db->prepare($sql);
  $stmt->execute();
}

}

