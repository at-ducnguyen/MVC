<?php

namespace App\Controllers;
use App\Models\User;
use App\Core\Session;

class UsersController extends Controller
{
  public function login()
  {
    if (isGuest()){
      view('users.login');

    }
    else {
      header('Location:/');

    }
  }

  public function index(){
    if(isAdmin()){
      header('Location:/users/list');
    }
    else
    header('Location:/users/profile');
  }


  public function signup()
  {
    if (isGuest()) {
      if (isset($_POST['btn'])){
        $user = new user();
        $data = array();
        $data['username'] = $_POST['username'];

        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        if ($user->validate($_POST['username'])){
          $err['err'] = "Tên đăng nhập đã tồn tại";
          view('users.signup',$err);
        }else {
         $user->save($data);
         Session::set('username',$data['username']);
         header('Location:/');
       }
     }
     return view('users.signup');
    } 
    else {
       header('Location:/');
   } 
 }


 public function checkLogin(){
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new User();
    if ($user->checkLogin($username,$password)){
      $check = $user->checkLogin($username,$password);
      Session::set('username',$check['username']);
      header('Location:/');
    }
    else {
      $err['err'] = 'Tên đăng nhập hoặc mật khẩu không đúng !';
      view('users.login',$err);
    }
  }

}   

public function logout(){
  
  Session::destroy();
  header('Location:/');
}  


public function list(){
  $users = new User();
  $data['list'] = $users->all();
  view('users.list',$data);
}

public function delete($id)
{
   if (isGuest()){
    header('Location:/users/login');
}
  else {
  $user = new User();
  $user->delete($id);
  header('Location:/users/list');
    }
}


public function profile(){
  if (isGuest()){
   header('Location:/users/login');
    }
else {
  $user = new User();
  $data['getUser'] = $user->getUser();
  view('users.profile',$data);
    }
}


public function update()
{
  if (isGuest()){
    header('Location:/users/login');
  }
  else {
    $user = new User();
    $data['getUser'] = $user->getUser();
    $id = $data['getUser']['id'];
    
    if (isset($_POST['update'])){

      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $data = array();
      $data['password'] = $_POST['password'];
      move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
      $data['avatar'] = $target_file;
      $user->update($data,$id);
      header('Location:/');
    }
    view('users.update',$data);
  }
}
}

