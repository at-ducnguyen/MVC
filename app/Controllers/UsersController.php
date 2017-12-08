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
        $model = new user();
        $data = array();
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        if ($model->checkUser($_POST['username'])){
          $error['error'] = "Tên đăng nhập đã tồn tại";
          view('users.signup',$error);
        }else {
         $model->save($data);
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
    $model = new User();
    $user = $model->checkLogin($username,$password);
    if ($user){
      Session::set('username',$user['username']);
      header('Location:/');
    }
    else {
      $error['error'] = 'Tên đăng nhập hoặc mật khẩu không đúng !';
      view('users.login',$error);
    }
  }

}   

public function logout(){

  Session::destroy();
  header('Location:/');
}  


public function list($currentPage=0)
  {
    $model = new User();
  $recordPerPage = 5; 
  $offset = $recordPerPage*$curentPage; 
  $data['users'] = $model->pagination($offset,$recordPerPage,'username','ASC'); 
  $data['totalPage'] = ceil($model->count()/$recordPerPage); 
  $data['currentPage'] = $currentPage;
  return view('users.list', $data); 
  }

public function delete($id)
{
 if (isGuest()){
  $error['error'] = 'Permission denied ! Bạn không có quyền truy cập trang này !';
      view('home.error',$error);
}
else {
  $model = new User();
  $model->delete($id);
  header('Location:/users/list');
}
}


public function profile(){
  if (isGuest()){
   $error['error'] = 'Permission denied ! Bạn không có quyền truy cập trang này !';
      view('home.error',$error);
 }
 else {
  $model = new User();
  $data = $model->getUser();
  view('users.profile',$data);
}
}

public function update()
{
  if (isGuest()){
    $error['error'] = 'Permission denied ! Bạn không có quyền truy cập trang này !';
      view('home.error',$error);
  }
  else {
    $model = new User();
    $user = $model->getUser();
    $id = $user['id'];
    
    if (isset($_POST['update'])){
      $data = array();
      $data['password'] = $_POST['password'];
      $data['email'] = $_POST['email'];

      if($_FILES['avatar']['name'] != ""){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
        $data['avatar'] = $target_file;
        $model->update($data,$id);
        header('Location:/users/profile');
      }
      else {
        $data['avatar'] = "";
        $model->update($data,$id);
        header('Location:/users/profile');
      }
    }    
    view('users.update',$user);
  }
}

public function edit($id){
  if (!isAdmin()){
    $error['error'] = 'Permission denied ! Bạn không có quyền truy cập trang này !';
      view('home.error',$error);
  }
  else {
    $model = new User();
    $user = $model->find($id);
    $id = $user['id'];
    if (isset($_POST['edit'])){
      $data = array();
      $data['username'] = $_POST['username'];
      $data['password'] = $_POST['password'];
      $data['email'] = $_POST['email'];
      $data['role'] = $_POST['role'];
      $model->edit($data,$id);
      header('Location:/users/list');
    }
    view('users.edit',$user);
  }

}

public function info($id){
  $model = new User();
  $user = $model->find($id);
  view('users.info',$user);
}


}

