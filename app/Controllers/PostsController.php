<?php
namespace App\Controllers;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
use App\Core\Session;

class PostsController extends Controller
{
  public function create()
  {
    if (isGuest()){
      header('Location:/users/login');
    }
    else {
      
      if (isset($_POST['btn'])){
        $post = new Post();
        $data = array();
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $data['title'] = $_POST['title'];
        $data['description'] = $_POST['description'];
        $data['category'] = $_POST['category'];
        $data['content'] = stripslashes($_POST['content']);
        $data['image'] = $target_file;
        $data['author'] = Session::get('username');
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $post->save($data);
        header('Location:/posts');
      }

      return view('posts.create');
    }
  }



  public function view($id)
  {
    $post = new Post();
    $data['postdetail'] = $post->find($id);
    $key = $data['postdetail']['category'];
    $data['list'] = $post->same($key,$id);
    $data['comments'] = $post->comment($id);
    return view('posts.view',$data);
  }

  public function edit($id)
  {
    if (isGuest()){
   header('Location:/users/login');
    }
    else {
    $post = new Post();
    $detail = $post->find($id);
        if (isset($_POST['btn'])){
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $data['title'] = $_POST['title'];
      $data['description'] = $_POST['description'];
      $data['category'] = $_POST['category'];
      $data['content'] = stripslashes($_POST['content']);
      $data['image'] = $target_file;
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      $post->edit($data,$id);
      header('Location:/posts/list');
    }
    return view('posts.edit',$detail);
    }
}


public function list()
{
  if(isGuest()){
    header('Location:/posts');
  }
  else{
    $posts = new Post();
    $data['list'] = $posts->order();
    return view('posts.list',$data);
  }
}



public function index()
{
  $posts = new Post();
  $data['list'] = $posts->order();
  return view('posts.index',$data);
}


public function delete($id)
{
  if (isGuest()){
   header('Location:/users/login');
  }
else {
  $del = new Post();
  $del->delete($id);
  if (isAdmin()){header('Location:/posts/list');}
  else { header('Location:/posts');} 
    }
}

public function category($category){
 $model = new Post();
 if($category==1){
  $data['posts'] = $model->category('Thể thao');
  view('posts.category',$data);
}

if($category==2){
  $data['posts'] = $model->category('Giải trí');
  view('posts.category',$data);
}

if($category==3){
  $data['posts'] = $model->category('Kinh tế');
  view('posts.category',$data);
}

if($category==4){
  $data['posts'] = $model->category('Giáo dục');
  view('posts.category',$data);
}

if($category==5){
  $data['posts'] = $model->category('Sức khỏe');
  view('posts.category',$data);
}

if($category==6) {
  $data['posts'] = $model->category('Thế giới');
  view('posts.category',$data);
}

else {
  $data['err'] = "Không tìm thấy yêu cầu";
  view('posts.category',$data);
}
}

public function search(){
  $posts = new Post();
  if (isset($_POST['search'])){
    $key = $_POST['key'];
    $data['list'] = $posts->search($key);
    view('posts.search',$data);
  }
}

public function userpost(){
  $posts = new Post();
  if (isGuest()){
    header('Location:/users/login');
  } else {
  $data['userpost'] = $posts->userpost($posts->getUsername());
  view('posts.userpost',$data);
}
}

public function comment(){
  if(isset($_POST['comment'])){
      if(isGuest()){
        $data['err'] = "Vui lòng đăng nhập để gửi bình luận";
        view('posts.view',$data);
      }
      else {
    $comment = new Comment();
    $data= array();
    $data['username'] = $comment->getUsername();
    $data['content'] = $_POST['content'];
    $data['post_id'] = $_POST['post_id'];
    dd($data);
    // $id = $_POST['post_id'];
    // $comment->save($data);
    // header("Location:/posts/view/$id");
  }
}

}

}
